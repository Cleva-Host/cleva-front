(function () {
    // cleva-backend origin — update this for production deployments
    var API_BASE = 'http://localhost:4000';

    function escapeHtml(value) {
        var div = document.createElement('div');
        div.textContent = value == null ? '' : String(value);
        return div.innerHTML;
    }

    function formatPrice(price, currency) {
        try {
            return new Intl.NumberFormat(undefined, { style: 'currency', currency: currency }).format(price);
        } catch (e) {
            return currency + ' ' + price;
        }
    }

    function normalizeName(raw) {
        var value = (raw || '').trim().toLowerCase();
        value = value.replace(/^https?:\/\//, '');
        value = value.replace(/^www\./, '');
        value = value.split('/')[0];
        return value.replace(/\s+/g, '');
    }

    function renderResults(container, data) {
        if (!data.results || !data.results.length) {
            container.innerHTML = '<p class="domain-checker-message error">No results found. Try a different name.</p>';
            container.hidden = false;
            return;
        }

        var items = data.results.map(function (result) {
            var stateClass = result.available ? 'available' : 'taken';
            var stateLabel = result.available ? 'Available' : 'Taken';
            var price = result.available
                ? '<span class="domain-checker-result__price">' + escapeHtml(formatPrice(result.price, result.currency)) + '/yr</span>'
                : '';
            var action = result.available
                ? '<a class="rts-btn rts-btn-primary" href="domain-registration.php?domain=' + encodeURIComponent(result.domain) + '">Register</a>'
                : '';

            return (
                '<li class="domain-checker-result ' + stateClass + '">' +
                    '<span class="domain-checker-result__name">' + escapeHtml(result.domain) + '</span>' +
                    '<span class="domain-checker-result__meta">' +
                        price +
                        '<span class="domain-checker-result__state">' + stateLabel + '</span>' +
                    '</span>' +
                    action +
                '</li>'
            );
        });

        container.innerHTML = '<ul class="domain-checker-result-list">' + items.join('') + '</ul>';
        container.hidden = false;
    }

    document.querySelectorAll('.rts-hero__form-area').forEach(function (formArea) {
        var form = formArea.closest('form');
        var input = formArea.querySelector('input[name="query"]');
        if (!form || !input) return;

        var select = formArea.querySelector('select[name="select"]');
        var submitBtn = formArea.querySelector('button[type="submit"]');

        var messageEl = document.createElement('p');
        messageEl.className = 'domain-checker-message';
        messageEl.hidden = true;

        var resultEl = document.createElement('div');
        resultEl.className = 'domain-checker-result-wrap';
        resultEl.hidden = true;

        formArea.insertAdjacentElement('afterend', resultEl);
        formArea.insertAdjacentElement('afterend', messageEl);

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            var name = normalizeName(input.value);
            if (!name) return;

            var hasTld = name.indexOf('.') !== -1;
            var tld = select ? select.value : '';
            var query = hasTld || !tld ? name : name + '.' + tld;

            resultEl.hidden = true;
            messageEl.className = 'domain-checker-message';
            messageEl.textContent = 'Checking ' + query + '…';
            messageEl.hidden = false;
            if (submitBtn) submitBtn.disabled = true;

            fetch(API_BASE + '/api/domain-checker?query=' + encodeURIComponent(query))
                .then(function (response) {
                    if (!response.ok) {
                        throw new Error('Request failed with status ' + response.status);
                    }
                    return response.json();
                })
                .then(function (data) {
                    messageEl.hidden = true;
                    renderResults(resultEl, data);
                })
                .catch(function () {
                    messageEl.className = 'domain-checker-message error';
                    messageEl.textContent = 'Something went wrong checking that domain. Please try again.';
                    messageEl.hidden = false;
                })
                .finally(function () {
                    if (submitBtn) submitBtn.disabled = false;
                });
        });
    });
})();
