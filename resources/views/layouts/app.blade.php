{{--
  Base Layout Template
  Main wrapper for all theme pages
--}}
<!doctype html>
<html {!! get_language_attributes() !!}>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php(wp_head())
</head>

<body @php(body_class())>
  @php(wp_body_open())
  
  <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-blue-600 focus:text-white focus:rounded">
    {{ __('Skip to content', 'sagepress') }}
  </a>

  @include('partials.header')

  <main id="main" class="min-h-screen">
    @yield('content')
  </main>

  @include('partials.footer')

  @php(wp_footer())
</body>
</html>
