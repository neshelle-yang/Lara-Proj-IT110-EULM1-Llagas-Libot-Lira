// Contact page: client-side form validation
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // One rule per field: returns an error message, or '' if valid
    const rules = {
        name: function (v) {
            if (!v) return 'Please enter your name.';
            if (v.length < 2) return 'Name must be at least 2 characters.';
            return '';
        },
        email: function (v) {
            if (!v) return 'Please enter your email address.';
            if (!emailPattern.test(v)) return 'Enter a valid email, like name@example.com.';
            return '';
        },
        subject: function (v) {
            if (!v) return 'Please enter a subject.';
            return '';
        },
        message: function (v) {
            if (!v) return 'Please write a message.';
            if (v.length < 10) return 'Message must be at least 10 characters.';
            return '';
        }
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

    // Validate each field when the user leaves it, and re-check while fixing
    Object.keys(rules).forEach(function (id) {
        const input = document.getElementById(id);
        input.addEventListener('blur', function () { validateField(id); });
        input.addEventListener('input', function () {
            if (input.classList.contains('invalid')) validateField(id);
        });
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        Object.keys(rules).forEach(validateField);
    });
});
