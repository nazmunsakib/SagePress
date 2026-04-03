<aside class="sidebar-primary hidden lg:block w-80 shrink-0">
  <div class="sticky top-32">
     @if(is_active_sidebar('sidebar-primary'))
       @php(dynamic_sidebar('sidebar-primary'))
     @else
       <section class="widget widget-placeholder mb-12 p-8 bg-white rounded-2xl border border-gray-100 shadow-sm border-dashed">
          <h3 class="text-xs font-black uppercase tracking-widest text-slate-300 mb-6">{{ __('Sidebar Info', 'sagepress') }}</h3>
          <p class="text-sm text-slate-400 font-medium italic">
            {{ __('No widgets found. Add them in the WordPress customizer or widgets area.', 'sagepress') }}
          </p>
       </section>
     @endif
  </div>
</aside>
