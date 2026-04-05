{{--
  Search Results Template
  Display search results
--}}
@extends('layouts.app')

@section('content')
  <div class="max-w-6xl mx-auto px-4 py-12">
    <header class="mb-10">
      <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
        {{ __('Search results for:', 'sagepress') }} <span class="text-blue-600">{{ get_search_query() }}</span>
      </h1>
      
      @php(global $wp_query)
      <p class="text-gray-500">
        {{ sprintf(_n('%s result found', '%s results found', $wp_query->found_posts, 'sagepress'), number_format_i18n($wp_query->found_posts)) }}
      </p>
    </header>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2">
        @if (have_posts())
          <div class="space-y-6">
            @while (have_posts())
              @php(the_post())
              <article class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition-shadow">
                <h2 class="text-xl font-bold text-gray-900 mb-2">
                  <a href="{{ get_permalink() }}" class="hover:text-blue-600 transition-colors">
                    {{ get_the_title() }}
                  </a>
                </h2>

                <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                  <span>{{ get_post_type_object(get_post_type())->labels->singular_name }}</span>
                  <span>&bull;</span>
                  <span>{{ get_the_author() }}</span>
                  <span>&bull;</span>
                  <time datetime="{{ get_the_date('c') }}">{{ get_the_date() }}</time>
                </div>

                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                  {{ wp_trim_words(get_the_excerpt(), 30) }}
                </p>

                <a href="{{ get_permalink() }}" class="text-sm text-blue-600 font-medium hover:text-blue-700">
                  {{ __('Read more', 'sagepress') }} &rarr;
                </a>
              </article>
            @endwhile
          </div>

          @include('partials.navigation')
        @else
          <div class="text-center py-12">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            
            <h2 class="text-xl font-bold text-gray-900 mb-2">{{ __('No results found', 'sagepress') }}</h2>
            <p class="text-gray-600 mb-6">{{ __('Try searching with different keywords', 'sagepress') }}</p>
            
            <div class="max-w-md mx-auto">
              {!! get_search_form(false) !!}
            </div>
          </div>
        @endif
      </div>

      <div class="lg:col-span-1">
        @include('partials.sidebar')
      </div>
    </div>
  </div>
@endsection
