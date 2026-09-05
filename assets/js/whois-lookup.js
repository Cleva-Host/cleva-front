(function () {
    // free, keyless WHOIS/RDAP API (https://github.com/Lissy93/who-dat)
    var API_URL = 'https://who-dat.as93.net/';

    function escapeHtml(value) {
        var div = document.createElement('div');
        div.textContent = value == null ? '' : String(value);
        return div.innerHTML;
    }

    function normalizeDomain(raw) {
        var value = (raw || '').trim().toLowerCase();
        value = value.replace(/^https?:\/\//, '');
        value = value.replace(/^www\./, '');
        value = value.split('/')[0];
        return value;
    }

    function isValidDomain(domain) {
        return /^(?!-)[a-z0-9-]{1,63}(?<!-)(\.[a-z0-9-]{1,63})+$/.test(domain);
    }

    function formatDate(value) {
        if (!value) return '—';
        var d = new Date(value);
        if (isNaN(d.getTime())) return escapeHtml(value);
        return d.toLocaleDateString(undefined, { year: 'numeric', month: 'long', day: 'numeric' });
    }

    function renderResult(resultEl, data, domain) {
        if (!resultEl) return;

        if (!data.isRegistered) {
            resultEl.innerHTML =
                '<div class="whois-result-header available">' +
                    '<h4>' + escapeHtml(domain) + ' is available</h4>' +
                    '<p>This domain does not appear to be registered.</p>' +
                '</div>' +
                '<a href="domain-registration.php" class="rts-btn rts-btn-primary">Register this domain</a>';
            resultEl.hidden = false;
            return;
        }

        var registrar = data.registrar && data.registrar.name ? data.registrar.name : 'Unknown';
        var dates = data.dates || {};
        var nameservers = Array.isArray(data.nameservers)
            ? data.nameservers.map(function (ns) { return ns.name; }).filter(Boolean)
            : [];
        var status = Array.isArray(data.status) ? data.status : [];

        resultEl.innerHTML =
            '<div class="whois-result-header registered">' +
                '<h4>' + escapeHtml(domain) + ' is registered</h4>' +
            '</div>' +
            '<ul class="whois-result-list">' +
                '<li><span>Registrar</span><span>' + escapeHtml(registrar) + '</span></li>' +
                '<li><span>Registered on</span><span>' + formatDate(dates.created) + '</span></li>' +
                '<li><span>Last updated</span><span>' + formatDate(dates.updated) + '</span></li>' +
                '<li><span>Expires on</span><span>' + formatDate(dates.expires) + '</span></li>' +
                '<li><span>Status</span><span>' + (status.length ? escapeHtml(status.join(', ')) : '—') + '</span></li>' +
                '<li><span>Nameservers</span><span>' + (nameservers.length ? escapeHtml(nameservers.join(', ')) : '—') + '</span></li>' +
            '</ul>';
        resultEl.hidden = false;
    }

    function lookup(domain, resultEl, messageEl, onDone) {
        resultEl.hidden = true;
        resultEl.innerHTML = '';
        messageEl.textContent = 'Looking up ' + domain + '…';
        messageEl.className = 'whois-lookup-message';
        messageEl.hidden = false;

        fetch(API_URL + encodeURIComponent(domain))
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('Lookup failed with status ' + response.status);
                }
                return response.json();
            })
            .then(function (data) {
                messageEl.hidden = true;
                renderResult(resultEl, data, domain);
            })
            .catch(function () {
                messageEl.textContent = 'Something went wrong looking up that domain. Please try again.';
                messageEl.className = 'whois-lookup-message error';
                messageEl.hidden = false;
            })
            .finally(function () {
                if (onDone) onDone();
            });
    }

    // wire up every whois search form on the page: validate, then let the
    // browser navigate to whois-result.php?domain=... (plain GET, no JS required)
    document.querySelectorAll('#whois-lookup-form').forEach(function (form) {
        var input = form.querySelector('#whois-domain-input, input[name="domain"]');
        var messageEl = document.getElementById('whois-lookup-message');
        var submitBtn = form.querySelector('.submit-btn');
        var btnLabel = submitBtn ? submitBtn.querySelector('.btn-text') : null;

        form.addEventListener('submit', function (e) {
            var domain = normalizeDomain(input ? input.value : '');

            if (!isValidDomain(domain)) {
                e.preventDefault();
                if (messageEl) {
                    messageEl.textContent = 'Please enter a valid domain name, e.g. example.com';
                    messageEl.className = 'whois-lookup-message error';
                    messageEl.hidden = false;
                }
                return;
            }

            if (input) input.value = domain;
            if (submitBtn) submitBtn.disabled = true;
            if (btnLabel) btnLabel.textContent = 'Looking up…';
            // let the form submit normally (GET navigation to whois-result.php)
        });
    });

    // on the results page: auto-run the lookup for the domain in the URL
    var resultEl = document.getElementById('whois-lookup-result');
    var resultMessageEl = document.getElementById('whois-lookup-message');
    if (resultEl && resultMessageEl) {
        var params = new URLSearchParams(window.location.search);
        var initialDomain = normalizeDomain(params.get('domain') || '');
        if (initialDomain && isValidDomain(initialDomain)) {
            lookup(initialDomain, resultEl, resultMessageEl);
        }
    }
})();
