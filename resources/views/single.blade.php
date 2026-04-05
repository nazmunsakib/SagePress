{{--
  Single Post Template
  Individual blog post view
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

        <div class="max-w-3xl mx-auto px-4 py-10">
          <header class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ get_the_title() }}</h1>
            
            <div class="flex items-center gap-4 text-sm text-gray-500">
              <div class="flex items-center gap-2">
                {{ get_avatar(get_the_author_meta('ID'), 32, '', '', ['class' => 'rounded-full']) }}
                <span>{{ get_the_author() }}</span>
              </div>
              <span>&bull;</span>
              <time datetime="{{ get_the_date('c') }}">{{ get_the_date() }}</time>
              @php
                $word_count = str_word_count(strip_tags(get_the_content()));
                $reading_time = ceil($word_count / 200);
              @endphp
              <span>&bull;</span>
              <span>{{ $reading_time }} {{ __('min read', 'sagepress') }}</span>
            </div>

            @if (get_the_category())
              <div class="flex gap-2 mt-4">
                @foreach (get_the_category() as $category)
                  <a href="{{ get_category_link($category->term_id) }}" class="text-xs bg-blue-100 text-blue-600 px-3 py-1 rounded-full hover:bg-blue-600 hover:text-white transition-colors">
                    {{ $category->name }}
                  </a>
                @endforeach
              </div>
            @endif
          </header>

          <div class="prose prose-gray max-w-none mb-10">
            {!! get_the_content() !!}
          </div>

          @if (get_the_tags())
            <div class="flex flex-wrap gap-2 mb-10 pb-10 border-b border-gray-200">
              @foreach (get_the_tags() as $tag)
                <a href="{{ get_tag_link($tag->term_id) }}" class="text-xs bg-gray-100 text-gray-600 px-3 py-1 rounded-full hover:bg-gray-200 transition-colors">
                  #{{ $tag->name }}
                </a>
              @endforeach
            </div>
          @endif

          {{-- Author Bio --}}
          @if (get_the_author_meta('description'))
            <div class="bg-gray-50 rounded-xl p-6 mb-10">
              <div class="flex items-start gap-4">
                {{ get_avatar(get_the_author_meta('ID'), 64, '', '', ['class' => 'rounded-full']) }}
                <div>
                  <h3 class="font-bold text-gray-900 mb-1">{{ get_the_author() }}</h3>
                  <p class="text-sm text-gray-600">{{ get_the_author_meta('description') }}</p>
                </div>
              </div>
            </div>
          @endif

          {{-- Post Navigation --}}
          <nav class="flex justify-between gap-4 pt-10 border-t border-gray-200">
            @php
              $prev = get_previous_post();
              $next = get_next_post();
            @endphp
            
            @if ($prev)
              <a href="{{ get_permalink($prev) }}" class="flex-1 text-left group">
                <span class="text-xs text-gray-400 uppercase tracking-wider">{{ __('Previous', 'sagepress') }}</span>
                <p class="text-sm font-medium text-gray-900 group-hover:text-blue-600 transition-colors">{{ get_the_title($prev) }}</p>
              </a>
            @else
              <div class="flex-1"></div>
            @endif

            @if ($next)
              <a href="{{ get_permalink($next) }}" class="flex-1 text-right group">
                <span class="text-xs text-gray-400 uppercase tracking-wider">{{ __('Next', 'sagepress') }}</span>
                <p class="text-sm font-medium text-gray-900 group-hover:text-blue-600 transition-colors">{{ get_the_title($next) }}</p>
              </a>
            @else
              <div class="flex-1"></div>
            @endif
          </nav>
        </div>
      </article>
    @endwhile
  @endif
@endsection
