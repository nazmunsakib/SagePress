{{--
  Archive Template
  Category, tag, date, and author archives
--}}
@extends('layouts.app')

@section('content')
  <div class="max-w-6xl mx-auto px-4 py-12">
    <header class="mb-10">
      @php
        $archive_type = '';
        if (is_category()) $archive_type = __('Category', 'sagepress');
        elseif (is_tag()) $archive_type = __('Tag', 'sagepress');
        elseif (is_author()) $archive_type = __('Author', 'sagepress');
        elseif (is_date()) $archive_type = __('Date', 'sagepress');
      @endphp
      
      @if ($archive_type)
        <span class="text-xs uppercase tracking-wider text-blue-600 font-semibold">{{ $archive_type }}</span>
      @endif
      
      <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
        {!! get_the_archive_title() !!}
      </h1>
      
      @if (get_the_archive_description())
        <div class="text-gray-500 leading-relaxed">
          {!! get_the_archive_description() !!}
        </div>
      @endif
    </header>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2">
        @if (have_posts())
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @while (have_posts())
              @php(the_post())
              <article class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                @if (has_post_thumbnail())
                  <a href="{{ get_permalink() }}">
                    {!! get_the_post_thumbnail(null, 'medium', ['class' => 'w-full h-48 object-cover']) !!}
                  </a>
                @endif

                <div class="p-6">
                  <h2 class="text-xl font-bold text-gray-900 mb-2">
                    <a href="{{ get_permalink() }}" class="hover:text-blue-600 transition-colors">
                      {{ get_the_title() }}
                    </a>
                  </h2>

                  <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                    <span>{{ get_the_author() }}</span>
                    <span>&bull;</span>
                    <time datetime="{{ get_the_date('c') }}">{{ get_the_date() }}</time>
                  </div>

                  <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    {{ wp_trim_words(get_the_excerpt(), 20) }}
                  </p>

                  <a href="{{ get_permalink() }}" class="text-sm text-blue-600 font-medium hover:text-blue-700">
                    {{ __('Read more', 'sagepress') }} &rarr;
                  </a>
                </div>
              </article>
            @endwhile
          </div>

          @include('partials.navigation')
        @else
          <div class="text-center py-12">
            <p class="text-gray-600 mb-4">{{ __('No posts found in this archive.', 'sagepress') }}</p>
            <a href="{{ home_url('/') }}" class="text-blue-600 hover:text-blue-700 font-medium">
              {{ __('Return to homepage', 'sagepress') }} &rarr;
            </a>
          </div>
        @endif
      </div>

      <div class="lg:col-span-1">
        @include('partials.sidebar')
      </div>
    </div>
  </div>
@endsection
