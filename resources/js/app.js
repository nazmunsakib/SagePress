/**
 * Mobile Menu Toggle
 * Implements a clean, accessible mobile navigation functionality.
 */
const initMobileMenu = () => {
  const button = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');
  const iconClosed = document.getElementById('menu-icon-closed');
  const iconOpen = document.getElementById('menu-icon-open');

  if (!button || !menu) return;

  const toggleMenu = () => {
    const isExpanded = button.getAttribute('aria-expanded') === 'true';
    
    // Toggle state
    button.setAttribute('aria-expanded', !isExpanded);
    menu.classList.toggle('hidden');
    
    // Toggle icons
    iconClosed.classList.toggle('hidden');
    iconOpen.classList.toggle('hidden');
    
    // Optional: Lock body scroll when menu is open
    document.body.style.overflow = !isExpanded ? 'hidden' : '';
  };

  button.addEventListener('click', toggleMenu);

  // Close menu on link click (useful for hash links)
  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      if (!menu.classList.contains('hidden')) {
        toggleMenu();
      }
    });
  });

  // Close menu on ESC key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
      toggleMenu();
    }
  });
};

/**
 * Initialize all site features
 */
document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
});

/**
 * Vite HMR Support
 */
if (import.meta.hot) {
  import.meta.hot.accept(() => {
    console.log('HMR Updated: SagePress Assets');
  });
}
