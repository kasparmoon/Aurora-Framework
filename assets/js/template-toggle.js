document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;

    if (body.classList.contains('privacy-mode')) {
        document.querySelectorAll('.comments-area, .newsletter-signup').forEach(el => el.remove());
    }

    if (body.classList.contains('terms-mode')) {
        document.querySelectorAll('.faq-section, .promo-banner').forEach(el => el.style.display = 'none');
    }
});
