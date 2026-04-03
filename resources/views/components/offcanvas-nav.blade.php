<div id="offcanvas-menu" class="fixed inset-0 z-50 invisible transition-all duration-300" role="dialog" aria-modal="true">
  <!-- Backdrop -->
  <div id="offcanvas-backdrop" class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>

  <!-- Panel -->
  <div id="offcanvas-panel" class="absolute right-0 top-0 h-full w-full max-w-sm bg-white shadow-2xl translate-x-full transition-transform duration-300 ease-out p-8 flex flex-col">
    <div class="flex items-center justify-between mb-16">
       <div class="flex items-center gap-3">
          <div class="h-8 w-8 flex items-center justify-center rounded-lg bg-brand-primary text-white">
             <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
          </div>
          <span class="text-xl font-black tracking-tight text-slate-900">{{ $siteName }}</span>
       </div>
       <button id="offcanvas-close" class="p-3 rounded-xl hover:bg-slate-50 text-slate-400 hover:text-slate-900 transition-all outline-none" aria-label="Close menu">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
       </button>
    </div>

    <nav class="flex-grow">
       @if (has_nav_menu('primary_navigation'))
         {!! wp_nav_menu([
           'theme_location' => 'primary_navigation',
           'menu_class' => 'flex flex-col space-y-8 text-2xl font-black text-slate-900 italic tracking-tighter',
           'add_li_class'  => 'hover:text-brand-primary transition-all hover:translate-x-4',
           'echo' => false
         ]) !!}
       @endif
    </nav>

    <div class="mt-auto border-t border-slate-100 pt-10">
       <p class="text-[11px] font-black uppercase tracking-widest text-slate-400 mb-6">{{ __('Find me online', 'sagepress') }}</p>
       <div class="flex gap-6">
          <a href="#" class="text-slate-400 hover:text-brand-primary font-bold text-sm">Twitter</a>
          <a href="#" class="text-slate-400 hover:text-brand-primary font-bold text-sm">GitHub</a>
       </div>
    </div>
  </div>
</div>
