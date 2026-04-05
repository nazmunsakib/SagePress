{{--
  Header Partial
  Sticky header with logo and navigation
--}}
<header class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
  <div class="max-w-6xl mx-auto px-4 flex items-center justify-between h-16">
    <a href="{{ home_url('/') }}" class="text-xl font-bold text-gray-900 hover:text-blue-600 transition-colors">
      {{ get_bloginfo('name') }}
    </a>

    <nav class="hidden md:block" aria-label="{{ __('Primary Navigation', 'sagepress') }}">
      @if (has_nav_menu('primary'))
        {!! wp_nav_menu([
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'flex items-center gap-6',
          'link_before' => '',
          'link_after' => '',
          'fallback_cb' => false,
        ]) !!}
      @endif
    </nav>

    <button 
      type="button"
      class="md:hidden p-2 text-gray-600 hover:text-blue-600"
      aria-label="{{ __('Toggle menu', 'sagepress') }}"
      onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
    @if (has_nav_menu('primary'))
      {!! wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'flex flex-col py-4',
        'fallback_cb' => false,
      ]) !!}
    @endif
  </div>
</header>
