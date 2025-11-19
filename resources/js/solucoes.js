/**
 * Soluções page specific behavior.
 * Adds smooth scroll for CTA buttons with [data-scroll] attribute.
 */

document.addEventListener('click', (event) => {
    const target = event.target.closest('[data-scroll]');

    if (!target) {
        return;
    }

    const selector = target.getAttribute('data-scroll');
    if (!selector) {
        return;
    }

    const destination = document.querySelector(selector);
    if (!destination) {
        return;
    }

    event.preventDefault();
    destination.scrollIntoView({ behavior: 'smooth', block: 'start' });
});
import $ from 'jquery';

const initBannerSlider = () => {
    const $page = $('.woox-travel-page');

    if (!$page.length) {
        return;
    }

    const $inputs = $page.find('.sec-1-input');

    if (!$inputs.length) {
        return;
    }

    const bannerSwitcher = () => {
        const $checked = $inputs.filter(':checked');
        const $next = $checked.next('.sec-1-input');

        if ($next.length) {
            $next.prop('checked', true);
        } else {
            $inputs.first().prop('checked', true);
        }
    };

    let bannerTimer = setInterval(bannerSwitcher, 5000);

    $page.find('nav .controls label').on('click', () => {
        clearInterval(bannerTimer);
        bannerTimer = setInterval(bannerSwitcher, 5000);
    });
};

const initPreloader = () => {
    const preloader = document.getElementById('js-preloader');

    if (!preloader) {
        return;
    }

    window.addEventListener('load', () => {
        preloader.classList.add('loaded');
    });
};

document.addEventListener('DOMContentLoaded', () => {
    initPreloader();
    initBannerSlider();
});

