// Contact page: client-side form validation
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');

    // One rule per field: returns an error message, or '' if valid
    const rules = {
        name: function (v) { return v ? '' : 'Please enter your name.'; },
        email: function (v) { return v ? '' : 'Please enter your email address.'; },
        subject: function (v) { return v ? '' : 'Please enter a subject.'; },
        message: function (v) { return v ? '' : 'Please write a message.'; }
    };

    function validateField(id) {
        const input = document.getElementById(id);
        const errorBox = document.getElementById(id + 'Error');
        const message = rules[id](input.value.trim());

        errorBox.textContent = message;
        input.classList.toggle('invalid', message !== '');
        input.classList.toggle('valid', message === '');
        return message === '';
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        Object.keys(rules).forEach(validateField);
    });
});
