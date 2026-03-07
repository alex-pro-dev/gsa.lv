import './bootstrap';

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
        }
    });
}, { threshold: 0.2 });

document.querySelectorAll('[data-animate]').forEach((el) => observer.observe(el));

const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
const root = document.documentElement;
const themeToggle = document.getElementById('themeToggle');

const getPreferredTheme = () => {
    const storedTheme = localStorage.getItem('gsa-theme');
    if (storedTheme === 'light' || storedTheme === 'dark') {
        return storedTheme;
    }

    return mediaQuery.matches ? 'dark' : 'light';
};

const applyTheme = (theme) => {
    root.setAttribute('data-theme', theme);

    if (themeToggle) {
        themeToggle.setAttribute('aria-pressed', String(theme === 'dark'));
        themeToggle.setAttribute('title', `Switch to ${theme === 'dark' ? 'light' : 'dark'} mode`);
    }
};

applyTheme(getPreferredTheme());

if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        const nextTheme = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
        localStorage.setItem('gsa-theme', nextTheme);
        applyTheme(nextTheme);
    });
}

mediaQuery.addEventListener('change', (event) => {
    if (localStorage.getItem('gsa-theme')) {
        return;
    }

    applyTheme(event.matches ? 'dark' : 'light');
});

const navbarMenu = document.getElementById('navbarMenu');
const navbarToggler = document.querySelector('[data-bs-target="#navbarMenu"]');

if (navbarMenu && navbarToggler) {
    navbarMenu.querySelectorAll('a, button').forEach((item) => {
        item.addEventListener('click', () => {
            const isMobileNav = window.getComputedStyle(navbarToggler).display !== 'none';

            if (isMobileNav && navbarMenu.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });
}
