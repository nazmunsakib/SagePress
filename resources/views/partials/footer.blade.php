<footer class="content-info bg-slate-900 pt-20 pb-12 text-slate-400">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 border-b border-white/5 pb-16">
      <!-- Col 1: About -->
      <div class="space-y-6">
        <span class="text-2xl font-black text-white italic tracking-tighter">{{ $siteName }}</span>
        <p class="text-sm leading-relaxed max-w-xs">
          {{ __('The premium WordPress starter theme built for performance, accessibility, and clean design.', 'sagepress') }}
        </p>
      </div>

      <!-- Col 2: Navigation -->
      <div>
        <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-xs opacity-50">{{ __('Links', 'sagepress') }}</h4>
        @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'footer_navigation',
            'menu_class' => 'space-y-4 text-sm font-bold',
            'add_li_class'  => 'hover:text-brand-primary transition-colors',
            'echo' => false
          ]) !!}
        @endif
      </div>

      <!-- Col 3: Resources -->
      <div>
         <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-xs opacity-50">{{ __('Resources', 'sagepress') }}</h4>
         <ul class="space-y-4 text-sm font-bold">
            <li><a href="#" class="hover:text-brand-primary transition-colors">Documentation</a></li>
            <li><a href="#" class="hover:text-brand-primary transition-colors">Support Center</a></li>
         </ul>
      </div>

      <!-- Col 4: Newsletter -->
      <div>
        <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-xs opacity-50">{{ __('Stay Updated', 'sagepress') }}</h4>
        <div class="flex flex-col gap-4">
           <div class="relative group">
              <input type="email" placeholder="Email address" class="bg-slate-800 border-none rounded-xl px-4 py-3 w-full text-sm text-white focus:ring-2 focus:ring-brand-primary/20 transition-all outline-none">
           </div>
           <button class="btn btn-primary w-full shadow-none">{{ __('Join List', 'sagepress') }}</button>
        </div>
      </div>
    </div>

    <!-- Bottom -->
    <div class="mt-8 flex flex-col md:flex-row items-center justify-between text-[11px] font-black uppercase tracking-[0.2em] text-slate-500">
      <p>&copy; {{ date('Y') }} {{ $siteName }}. {{ __('All rights reserved.', 'sagepress') }}</p>
      <div class="flex items-center gap-6">
         <p>{{ __('Design & Development by', 'sagepress') }} <a href="https://nazmunsakib.com" class="text-white hover:text-brand-primary transition-colors" target="_blank" rel="noopener">Nazmun Sakib</a></p>
      </div>
    </div>
  </div>
</footer>
