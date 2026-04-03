@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="archive-container py-24 sm:py-32 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row gap-16 xl:gap-24">
        
        <!-- Main Loop -->
        <div class="main-loop flex-grow">
          @if (!have_posts())
            <x-alert type="warning">
              {!! __('Sorry, no results were found.', 'sagepress') !!}
            </x-alert>
            {!! get_search_form(false) !!}
          @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 xl:gap-12">
              @while(have_posts()) @php(the_post())
                @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
              @endwhile
            </div>

            <div class="mt-20">
              @include('partials.pagination')
            </div>
          @endif
        </div>

        <!-- Sidebar -->
        @include('partials.sidebar')
      </div>
    </div>
  </div>
@endsection
