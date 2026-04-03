<header id="masthead" class="banner bg-white border-b border-gray-100 sticky top-0 z-50">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex h-20 items-center justify-between">
      <!-- Logo/Brand Section -->
      <div class="flex-shrink-0">
        <a class="brand group flex items-center gap-3 transition-opacity hover:opacity-90" href="{{ home_url('/') }}">
          <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-primary text-white shadow-lg shadow-blue-500/20 transition-transform group-hover:scale-105">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <span class="text-xl font-extrabold tracking-tight text-gray-900 sm:text-2xl">
            {{ $siteName }}
          </span>
        </a>
      </div>

      <!-- Desktop Navigation -->
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary hidden lg:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex space-x-8 text-sm font-semibold text-gray-600 transition-colors',
            'add_li_class'  => 'hover:text-brand-primary transition-colors',
            'echo' => false
          ]) !!}
        </nav>
      @endif

      <!-- Call to Action / Search (Desktop) -->
      <div class="hidden lg:flex items-center gap-4">
        <button type="button" class="text-gray-500 hover:text-gray-900 transition-colors p-2" aria-label="Search">
          <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>
        </button>
        <a href="#" class="btn btn-primary">
          {{ __('Get Started', 'sagepress') }}
        </a>
      </div>

      <!-- Mobile Menu Toggle -->
      <div class="flex items-center lg:hidden">
        <button 
          id="mobile-menu-button"
          type="button" 
          class="relative inline-flex items-center justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-brand-primary transition-all"
          aria-controls="mobile-menu" 
          aria-expanded="false"
        >
          <span class="sr-only">{{ __('Open main menu', 'sagepress') }}</span>
          
          <!-- Icon Menu Closed -->
          <svg id="menu-icon-closed" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          
          <!-- Icon Menu Open -->
          <svg id="menu-icon-open" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-100 bg-white/95 backdrop-blur-md absolute w-full shadow-xl">
    <div class="space-y-1 px-4 pb-6 pt-4">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex flex-col space-y-2',
          'add_li_class'  => 'block rounded-lg px-4 py-3 text-base font-semibold text-gray-700 hover:bg-brand-light hover:text-brand-primary active:bg-blue-50 transition-colors',
          'echo' => false
        ]) !!}
      @endif
      <div class="pt-4 border-t border-gray-100 mt-4 space-y-4">
        <a href="#" class="btn btn-primary w-full shadow-md">
          {{ __('Get Started', 'sagepress') }}
        </a>
      </div>
    </div>
  </div>
</header>
