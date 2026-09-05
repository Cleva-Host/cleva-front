(function () {
    // free, keyless WHOIS/RDAP API (https://github.com/Lissy93/who-dat) —
    // its isRegistered flag doubles as an availability check
    var API_URL = 'https://who-dat.as93.net/';
    var ALLOWED_TLDS = ['.com', '.net', '.love', '.pw', '.org', '.info', '.xyz'];

    function escapeHtml(value) {
        var div = document.createElement('div');
        div.textContent = value == null ? '' : String(value);
        return div.innerHTML;
    }

    function normalizeLabel(raw) {
        var value = (raw || '').trim().toLowerCase();
        value = value.replace(/^https?:\/\//, '');
        value = value.replace(/^www\./, '');
        value = value.split('/')[0];
        if (value.indexOf('.') !== -1) {
            value = value.split('.')[0];
        }
        return value;
    }

    function isValidLabel(label) {
        return /^(?!-)[a-z0-9-]{1,63}(?<!-)$/.test(label);
    }

    function renderResult(resultEl, data, domain) {
        if (!data.isRegistered) {
            resultEl.innerHTML =
                '<div class="whois-result-header available">' +
                    '<h4>' + escapeHtml(domain) + ' is available!</h4>' +
                    '<p>This domain is free to register.</p>' +
                '</div>' +
                '<a href="sign-up.php" class="rts-btn rts-btn-primary">Register Now</a>';
        } else {
            resultEl.innerHTML =
                '<div class="whois-result-header registered">' +
                    '<h4>' + escapeHtml(domain) + ' is already taken</h4>' +
                    '<p>Try a different name or extension, or see who owns this one.</p>' +
                '</div>' +
                '<a href="whois-result.php?domain=' + encodeURIComponent(domain) + '" class="rts-btn rts-btn-secondary">See who owns it</a>';
        }
        resultEl.hidden = false;
    }

    function checkAvailability(domain, resultEl, messageEl) {
        resultEl.hidden = true;
        resultEl.innerHTML = '';
        messageEl.textContent = 'Checking ' + domain + '…';
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
                messageEl.textContent = 'Something went wrong checking that domain. Please try again.';
                messageEl.className = 'whois-lookup-message error';
                messageEl.hidden = false;
            });
    }

    // wire up every availability-check form on the page: validate, then let
    // the browser navigate to domain-availability.php?domain=...&tld=... (plain GET)
    document.querySelectorAll('#domain-availability-form').forEach(function (form) {
        var input = form.querySelector('#domain-availability-input, input[name="domain"]');
        var select = form.querySelector('select[name="tld"]');
        var messageEl = document.getElementById('domain-availability-message');

        form.addEventListener('submit', function (e) {
            var label = normalizeLabel(input ? input.value : '');
            var tld = select ? select.value : '.com';

            if (ALLOWED_TLDS.indexOf(tld) === -1) {
                tld = '.com';
            }

            if (!isValidLabel(label)) {
                e.preventDefault();
                if (messageEl) {
                    messageEl.textContent = 'Please enter a valid domain name, e.g. example.com';
                    messageEl.className = 'whois-lookup-message error';
                    messageEl.hidden = false;
                }
                return;
            }

            if (input) input.value = label;
            // let the form submit normally (GET navigation to domain-availability.php)
        });
    });

    // on the results page: auto-run the check for the domain in the URL
    var resultEl = document.getElementById('domain-availability-result');
    var resultMessageEl = document.getElementById('domain-availability-message');
    if (resultEl && resultMessageEl) {
        var params = new URLSearchParams(window.location.search);
        var label = normalizeLabel(params.get('domain') || '');
        var tld = (params.get('tld') || '.com').toLowerCase();
        if (ALLOWED_TLDS.indexOf(tld) === -1) {
            tld = '.com';
        }
        if (label && isValidLabel(label)) {
            checkAvailability(label + tld, resultEl, resultMessageEl);
        }
    }
})();
