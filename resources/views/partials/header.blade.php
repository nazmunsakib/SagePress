<header class="banner bg-white/90 backdrop-blur-xl sticky top-0 z-40 border-b border-gray-100">
  <div class="container mx-auto px-4 sm:px-6">
    <div class="flex h-20 items-center justify-between">
      <!-- Logo Section -->
      <div class="flex-shrink-0">
        <a class="brand flex items-center gap-3 group transition-opacity hover:opacity-90" href="{{ home_url('/') }}">
          <div class="h-10 w-10 flex items-center justify-center rounded-xl bg-brand-primary text-white shadow-xl shadow-blue-500/10 transform group-hover:scale-105 transition-transform">
             <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
          </div>
          <span class="text-xl font-black tracking-tight text-slate-900">{{ $siteName }}</span>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <nav class="hidden lg:block" aria-label="Main Navigation">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex items-center space-x-12 text-sm font-bold text-slate-600',
            'add_li_class'  => 'hover:text-brand-primary transition-colors',
            'echo' => false
          ]) !!}
        @endif
      </nav>

      <!-- Toggle & CTA -->
      <div class="flex items-center gap-4">
        <button id="mobile-menu-open" type="button" class="lg:hidden p-2 text-slate-500 hover:text-brand-primary transition-all rounded-lg hover:bg-gray-50 outline-none" aria-label="Open mobile menu">
          <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h11.25m-11.25 5.25h16.5" /></svg>
        </button>
        <a href="#" class="hidden md:inline-flex btn btn-primary shadow-xl shadow-brand-primary/10">
          {{ __('Get Started', 'sagepress') }}
        </a>
      </div>
    </div>
  </div>
</header>
