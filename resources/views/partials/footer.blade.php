{{--
  Footer Partial
  Site footer with navigation and copyright
--}}
<footer class="bg-gray-50 border-t border-gray-200 mt-auto">
  <div class="max-w-6xl mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
      <div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ get_bloginfo('name') }}</h3>
        <p class="text-sm text-gray-600">{{ get_bloginfo('description') }}</p>
      </div>

      @if (has_nav_menu('footer'))
        <nav aria-label="{{ __('Footer Navigation', 'sagepress') }}">
          {!! wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'flex flex-col gap-2',
            'fallback_cb' => false,
          ]) !!}
        </nav>
      @endif
    </div>

    <div class="pt-6 border-t border-gray-200 text-center text-sm text-gray-500">
      &copy; {{ date('Y') }} {{ get_bloginfo('name') }}. {{ __('All rights reserved.', 'sagepress') }}
    </div>
  </div>
</footer>
