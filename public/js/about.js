// About page: animated number counters + Read more / Read less
document.addEventListener('DOMContentLoaded', function () {
    // ---- Read more / Read less ----
    var toggleBtn = document.getElementById('story-toggle');
    var moreText = document.getElementById('story-more');

    if (toggleBtn && moreText) {
        toggleBtn.addEventListener('click', function () {
            var isHidden = moreText.hasAttribute('hidden');
            if (isHidden) {
                moreText.removeAttribute('hidden');
            } else {
                moreText.setAttribute('hidden', '');
            }
            toggleBtn.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
            toggleBtn.textContent = isHidden ? 'Read less' : 'Read more';
        });
    }

    // ---- Animated number counters ----
    var counters = document.querySelectorAll('.counter');
    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function formatNumber(value) {
        return value.toLocaleString('en-US');
    }

    function animateCounter(el) {
        var target = parseInt(el.dataset.target, 10);
        var duration = 1800; // milliseconds
        var startTime = null;

        function step(timestamp) {
            if (startTime === null) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3); // slows down near the end
            el.textContent = formatNumber(Math.floor(eased * target));

            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                el.textContent = formatNumber(target);
            }
        }

        requestAnimationFrame(step);
    }

    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
        counters.forEach(function (el) {
            el.textContent = formatNumber(parseInt(el.dataset.target, 10));
        });
        return;
    }

    var observer = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.6 });

    counters.forEach(function (el) {
        observer.observe(el);
    });
});
