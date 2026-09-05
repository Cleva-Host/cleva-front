(function () {
    // note: intentionally not "contact-form" - assets/js/plugins.min.js
    // bundles a legacy jQuery plugin that binds its own (unused) submit
    // handler to any element with id="contact-form"
    var form = document.getElementById('cleva-contact-form');
    if (!form) return;

    var messagesEl = document.getElementById('form-messages');
    var submitBtn = form.querySelector('.submit__btn');
    var submitLabel = submitBtn ? submitBtn.textContent : 'Submit Now';

    // the cleva-backend API (see cleva-backend/.env for the port); update
    // this if the backend is deployed somewhere other than localhost
    var API_URL = 'http://localhost:4000/api/contact';

    function showMessage(text, type) {
        if (!messagesEl) return;
        messagesEl.textContent = text;
        messagesEl.className = 'whois-lookup-message' + (type ? ' ' + type : '');
        messagesEl.hidden = false;
    }

    function setLoading(isLoading) {
        if (!submitBtn) return;
        submitBtn.disabled = isLoading;
        submitBtn.textContent = isLoading ? 'Sending…' : submitLabel;
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var name = (form.querySelector('#name') || {}).value || '';
        var email = (form.querySelector('#email') || {}).value || '';
        var phone = (form.querySelector('#phone') || {}).value || '';
        var message = (form.querySelector('#message') || {}).value || '';

        if (!name.trim() || !email.trim() || !message.trim()) {
            showMessage('Please fill in your name, email and message.', 'error');
            return;
        }

        setLoading(true);
        showMessage('', '');
        if (messagesEl) messagesEl.hidden = true;

        fetch(API_URL, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                name: name.trim(),
                email: email.trim(),
                phone: phone.trim(),
                message: message.trim(),
            }),
        })
            .then(function (response) {
                return response.json().then(function (data) {
                    return { ok: response.ok, data: data };
                });
            })
            .then(function (result) {
                if (!result.ok) {
                    throw new Error((result.data && result.data.error) || 'Failed to send your message.');
                }
                showMessage("Thanks! Your message has been sent — we'll be in touch shortly.", 'success');
                form.reset();
            })
            .catch(function (err) {
                showMessage(err.message || 'Something went wrong. Please try again later.', 'error');
            })
            .finally(function () {
                setLoading(false);
            });
    });
})();
