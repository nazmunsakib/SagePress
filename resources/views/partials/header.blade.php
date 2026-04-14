<header id="site-header" class="sticky top-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-gray-100">
  <div class="container mx-auto px-4 md:px-6">
    <div class="flex items-center justify-between h-20">
      {{-- Brand --}}
      <a class="flex items-center gap-2 group" href="{{ home_url('/') }}">
        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white scale-100 group-hover:scale-110 transition-transform shadow-lg shadow-blue-500/20">
          <span class="font-bold text-xl uppercase italic">S</span>
        </div>
        <span class="text-xl font-bold tracking-tight text-gray-900 leading-none">
          {!! $siteName !!}
        </span>
      </a>

      {{-- Desktop Navigation --}}
      @if (has_nav_menu('primary'))
        <nav class="hidden lg:flex items-center gap-8" aria-label="{{ wp_get_nav_menu_name('primary') }}">
          {!! wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex items-center gap-8 list-none m-0 p-0',
            'echo' => false
          ]) !!}
        </nav>
      @endif

      {{-- Actions --}}
      <div class="flex items-center gap-4">
        <div class="hidden sm:block">
          <a href="/contact" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-all shadow-md shadow-blue-600/10 active:scale-95">
            Get Started
          </a>
        </div>

        {{-- Mobile Menu Toggle --}}
        <button id="menu-toggle" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 p-2 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none" aria-label="Toggle menu">
          <span class="w-6 h-0.5 bg-gray-600 transition-transform origin-center"></span>
          <span class="w-6 h-0.5 bg-gray-600 transition-opacity"></span>
          <span class="w-6 h-0.5 bg-gray-600 transition-transform origin-center"></span>
        </button>
      </div>
    </div>
  </div>

  {{-- Mobile Navigation --}}
  <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 bg-white shadow-xl">
    <div class="container mx-auto px-4 py-8">
      @if (has_nav_menu('primary'))
        <nav aria-label="Mobile Navigation">
          {!! wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex flex-col gap-6 list-none m-0 p-0 text-lg font-medium',
            'echo' => false
          ]) !!}
        </nav>
      @endif
      <div class="mt-10 pt-8 border-t border-gray-100">
        <a href="/contact" class="flex items-center justify-center w-full px-5 py-4 text-base font-bold text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl shadow-xl shadow-blue-500/20">
          Get Started
        </a>
      </div>
    </div>
  </div>
</header>

<script>
  (function() {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const header = document.getElementById('site-header');

    if (menuToggle && mobileMenu) {
      menuToggle.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.toggle('hidden');
        
        const spans = menuToggle.querySelectorAll('span');
        if (!isHidden) {
          spans[0].style.transform = 'translateY(7px) rotate(45deg)';
          spans[1].style.opacity = '0';
          spans[2].style.transform = 'translateY(-7px) rotate(-45deg)';
          document.body.style.overflow = 'hidden';
        } else {
          spans[0].style.transform = '';
          spans[1].style.opacity = '1';
          spans[2].style.transform = '';
          document.body.style.overflow = '';
        }
      });
    }

    // Scroll styling
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 20) {
        header.classList.add('shadow-sm', 'bg-white/95');
        header.classList.remove('bg-white/80');
      } else {
        header.classList.remove('shadow-sm', 'bg-white/95');
        header.classList.add('bg-white/80');
      }
    });
  })();
</script>
