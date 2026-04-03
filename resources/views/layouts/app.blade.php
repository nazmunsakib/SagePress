<!doctype html>
<html @php(language_attributes()) class="scroll-smooth">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @php(wp_head())
  </head>

  <body @php(body_class('antialiased font-sans bg-slate-50 text-slate-900'))>
    @php(wp_body_open())

    <div id="app" class="flex flex-col min-h-screen">
      <a class="sr-only focus:not-sr-only focus:absolute focus:z-[100] focus:bg-brand-primary focus:text-white focus:px-6 focus:py-3" href="#main">
        {{ __('Skip to content', 'sagepress') }}
      </a>

      @include('partials.header')

      <main id="main" class="main flex-grow outline-none" tabindex="-1">
        @yield('content')
      </main>

      @include('partials.footer')
    </div>

    @include('components.offcanvas-nav')

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
