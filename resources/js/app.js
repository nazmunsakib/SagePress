/**
 * Mobile Menu Toggle (Offcanvas)
 * Implements a clean, accessible mobile navigation functionality.
 */
const initOffcanvas = () => {
    const openBtn = document.getElementById('mobile-menu-open');
    const closeBtn = document.getElementById('offcanvas-close');
    const overlay = document.getElementById('offcanvas-backdrop');
    const menu = document.getElementById('offcanvas-menu');
    const panel = document.getElementById('offcanvas-panel');

    if (!menu || !openBtn) return;

    const toggleMenu = (force) => {
        const isOpen = typeof force === 'boolean' ? force : menu.classList.contains('invisible');
        
        if (isOpen) {
            menu.classList.remove('invisible');
            setTimeout(() => {
                overlay.classList.add('opacity-100');
                panel.classList.remove('translate-x-full');
                document.body.classList.add('overflow-hidden');
            }, 5);
        } else {
            overlay.classList.remove('opacity-100');
            panel.classList.add('translate-x-full');
            document.body.classList.remove('overflow-hidden');
            setTimeout(() => {
                menu.classList.add('invisible');
            }, 300);
        }
    };

    openBtn.addEventListener('click', () => toggleMenu(true));
    closeBtn?.addEventListener('click', () => toggleMenu(false));
    overlay?.addEventListener('click', () => toggleMenu(false));

    // Handle Link clicks (useful for hash anchors)
    panel.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
    });

    // Close menu on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !menu.classList.contains('invisible')) {
            toggleMenu(false);
        }
    });
};

/**
 * Initialize all site features
 */
document.addEventListener('DOMContentLoaded', () => {
    initOffcanvas();
});

/**
 * Vite HMR Support
 */
if (import.meta.hot) {
  import.meta.hot.accept();
}
