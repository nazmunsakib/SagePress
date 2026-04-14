<footer class="bg-gray-900 text-gray-300 pt-16 pb-8 border-t border-gray-800">
  <div class="container mx-auto px-4 md:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
      {{-- Column 1: Brand & Info --}}
      <div class="space-y-6">
        <a class="flex items-center gap-2 group" href="{{ home_url('/') }}">
          <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white scale-100 group-hover:scale-110 transition-transform">
            <span class="font-bold text-xl">S</span>
          </div>
          <span class="text-xl font-bold tracking-tight text-white leading-none">
            {!! $siteName !!}
          </span>
        </a>
        <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
          Building state-of-the-art digital experiences with modern tools and clean code. Elevating brands through innovative design.
        </p>
        <div class="flex items-center gap-4">
          <a href="#" class="w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition-all group" aria-label="Twitter">
            <span class="text-xs group-hover:text-white">TW</span>
          </a>
          <a href="#" class="w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition-all group" aria-label="LinkedIn">
            <span class="text-xs group-hover:text-white">LI</span>
          </a>
          <a href="#" class="w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center hover:bg-blue-600 hover:border-blue-600 transition-all group" aria-label="GitHub">
            <span class="text-xs group-hover:text-white">GH</span>
          </a>
        </div>
      </div>

      {{-- Column 2: Navigation --}}
      <div>
        <h3 class="text-white font-semibold mb-6 uppercase tracking-wider text-xs">Resources</h3>
        @if (has_nav_menu('footer'))
          <nav aria-label="{{ wp_get_nav_menu_name('footer') }}">
            {!! wp_nav_menu([
              'theme_location' => 'footer',
              'container' => false,
              'menu_class' => 'flex flex-col gap-3 list-none m-0 p-0',
              'echo' => false
            ]) !!}
          </nav>
        @else
          <ul class="flex flex-col gap-3 list-none m-0 p-0">
            <li><a href="#" class="hover:text-blue-500 transition-colors text-sm">Services</a></li>
            <li><a href="#" class="hover:text-blue-500 transition-colors text-sm">About Us</a></li>
            <li><a href="#" class="hover:text-blue-500 transition-colors text-sm">Case Studies</a></li>
            <li><a href="#" class="hover:text-blue-500 transition-colors text-sm">Blog</a></li>
          </ul>
        @endif
      </div>

      {{-- Column 3: Contact & Legal --}}
      <div>
        <h3 class="text-white font-semibold mb-6 uppercase tracking-wider text-xs">Contact</h3>
        <ul class="flex flex-col gap-3 list-none m-0 p-0 text-sm">
          <li class="flex items-start gap-3">
            <span class="text-blue-500 flex-shrink-0">@</span>
            <span>hello@example.com</span>
          </li>
          <li><a href="#" class="hover:text-blue-500 transition-colors">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-blue-500 transition-colors">Terms of Service</a></li>
          <li><a href="#" class="hover:text-blue-500 transition-colors">Cookie Policy</a></li>
        </ul>
      </div>

      {{-- Column 4: Newsletter --}}
      <div>
        <h3 class="text-white font-semibold mb-6 uppercase tracking-wider text-xs">Newsletter</h3>
        <p class="text-gray-400 text-sm mb-6">
          Subscribe to get the latest updates and news.
        </p>
        <form action="#" class="space-y-3">
          <div class="relative">
            <input type="email" placeholder="Email address" class="w-full bg-gray-800 border-0 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-blue-600 focus:outline-none transition-all" required>
          </div>
          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg text-sm transition-all">
            Join Now
          </button>
        </form>
      </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500 uppercase tracking-widest">
      <p>&copy; {{ date('Y') }} {!! $siteName !!}. All rights reserved.</p>
      <p>Crafted with pride by Nazmun Sakib</p>
    </div>
  </div>
</footer>
