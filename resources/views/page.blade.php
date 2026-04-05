{{--
  Default Page Template
  Static pages
--}}
@extends('layouts.app')

@section('content')
  @if (have_posts())
    @while (have_posts())
      @php(the_post())
      
      <article>
        @if (has_post_thumbnail())
          <div class="w-full h-64 md:h-96 overflow-hidden">
            {!! get_the_post_thumbnail(null, 'full', ['class' => 'w-full h-full object-cover']) !!}
          </div>
        @endif

        <div class="max-w-4xl mx-auto px-4 py-12">
          <header class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900">{{ get_the_title() }}</h1>
          </header>

          <div class="prose prose-gray max-w-none">
            {!! get_the_content() !!}
          </div>
        </div>
      </article>
    @endwhile
  @endif
@endsection
