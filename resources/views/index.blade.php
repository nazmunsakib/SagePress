@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="archive-blog py-20 bg-brand-light">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      @if (! have_posts())
        <div class="rounded-2xl bg-white border border-gray-100 p-12 text-center shadow-lg shadow-blue-500/5">
          <svg class="mx-auto h-16 w-16 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h2 class="mt-4 text-2xl font-bold tracking-tight text-gray-900">{{ __('No results found.', 'sagepress') }}</h2>
          <p class="mt-2 text-gray-500 max-w-sm mx-auto">
            {{ __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sagepress') }}
          </p>
          <div class="mt-8">
            {!! get_search_form(false) !!}
          </div>
        </div>
      @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 xl:gap-12">
          @while(have_posts()) @php(the_post())
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          @endwhile
        </div>

        <div class="mt-20 flex justify-center">
           @include('partials.pagination')
        </div>
      @endif
    </div>
  </div>
@endsection
