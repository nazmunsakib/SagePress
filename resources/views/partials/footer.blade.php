<footer class="bg-gray-950 text-gray-400 pt-20 pb-10 border-t border-gray-900 overflow-hidden relative">
  {{-- Background Decoration --}}
  <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[500px] h-[500px] bg-blue-600/5 rounded-full blur-[120px] pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-indigo-600/5 rounded-full blur-[120px] pointer-events-none"></div>

  <div class="container mx-auto px-4 md:px-6 relative z-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
      {{-- Brand --}}
      <div class="space-y-8">
        <a class="flex items-center gap-3 group" href="{{ home_url('/') }}">
          <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white scale-100 group-hover:scale-105 transition-all shadow-xl shadow-blue-500/10">
            <span class="font-bold text-2xl uppercase italic">S</span>
          </div>
          <span class="text-2xl font-bold tracking-tight text-white leading-none">
            {!! $siteName !!}
          </span>
        </a>
        <p class="text-gray-500 text-base leading-relaxed max-w-xs">
          Empowering modern brands with cutting-edge design and development solutions. Focused on performance, aesthetics, and user experience.
        </p>
        <div class="flex items-center gap-5">
          <a href="#" class="text-gray-500 hover:text-blue-500 transition-colors" aria-label="X (Twitter)">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231 5.45-6.231zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77z"/></svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-blue-500 transition-colors" aria-label="LinkedIn">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.238 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
          </a>
          <a href="#" class="text-gray-500 hover:text-blue-500 transition-colors" aria-label="Instagram">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
        </div>
      </div>

      {{-- Navigation Groups --}}
      <div class="lg:col-span-2 grid grid-cols-2 gap-8">
        <div>
          <h3 class="text-white font-bold mb-8 uppercase tracking-[0.2em] text-[10px]">Resources</h3>
          @if (has_nav_menu('footer'))
            <nav aria-label="Footer Navigation Labels">
              {!! wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'flex flex-col gap-4 list-none m-0 p-0',
                'echo' => false
              ]) !!}
            </nav>
          @else
            <ul class="flex flex-col gap-4 list-none m-0 p-0">
              <li><a href="#" class="hover:text-blue-500 transition-colors text-sm font-medium">Marketplace</a></li>
              <li><a href="#" class="hover:text-blue-500 transition-colors text-sm font-medium">Documentation</a></li>
              <li><a href="#" class="hover:text-blue-500 transition-colors text-sm font-medium">API Status</a></li>
              <li><a href="#" class="hover:text-blue-500 transition-colors text-sm font-medium">Changelog</a></li>
            </ul>
          @endif
        </div>
        <div>
          <h3 class="text-white font-bold mb-8 uppercase tracking-[0.2em] text-[10px]">Company</h3>
          <ul class="flex flex-col gap-4 list-none m-0 p-0">
            <li><a href="#" class="hover:text-blue-500 transition-colors text-sm font-medium">About Us</a></li>
            <li><a href="#" class="hover:text-blue-500 transition-colors text-sm font-medium">Careers</a></li>
            <li><a href="#" class="hover:text-blue-500 transition-colors text-sm font-medium">Privacy Policy</a></li>
            <li><a href="#" class="hover:text-blue-500 transition-colors text-sm font-medium">Terms</a></li>
          </ul>
        </div>
      </div>

      {{-- Newsletter --}}
      <div class="space-y-6">
        <h3 class="text-white font-bold uppercase tracking-[0.2em] text-[10px]">Newsletter</h3>
        <p class="text-gray-500 text-sm">
          Get the latest news and updates from our team.
        </p>
        <form class="space-y-3">
          <input type="email" placeholder="Email address" class="w-full bg-gray-900 border border-gray-800 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-blue-600 focus:outline-none focus:border-transparent transition-all placeholder:text-gray-600" required>
          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl text-xs uppercase tracking-widest transition-all shadow-lg shadow-blue-600/10">
            Subscribe
          </button>
        </form>
      </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="pt-10 border-t border-gray-900 flex flex-col md:flex-row justify-between items-center gap-6">
      <p class="text-[11px] uppercase tracking-[0.15em] text-gray-600">
        &copy; {{ date('Y') }} {!! $siteName !!}. All rights reserved.
      </p>
      <div class="flex items-center gap-1.5 text-[11px] uppercase tracking-[0.15em] text-gray-600">
        <span>Handcrafted by</span>
        <a href="https://github.com/nazmunsakib" class="text-blue-600 font-bold hover:text-blue-500 transition-colors">Nazmun Sakib</a>
      </div>
    </div>
  </div>
</footer>
