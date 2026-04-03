<article @php(post_class('single-post-article pb-24'))>
  <!-- Post Banner/Header Section -->
  <header class="relative bg-brand-dark py-24 sm:py-32 xl:py-40">
    <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-brand-light to-transparent"></div>
    
    @if (has_post_thumbnail())
      <div class="absolute inset-0 opacity-20 filter grayscale blur-sm">
        {!! get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'h-full w-full object-cover']) !!}
      </div>
    @endif

    <div class="container relative mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto space-y-8 text-center sm:text-left">
         <div class="flex flex-wrap justify-center sm:justify-start gap-4">
            @php($categories = get_the_category())
            @foreach($categories as $category)
              <a href="{{ get_category_link($category->term_id) }}" class="inline-flex items-center rounded-lg bg-brand-primary/10 px-4 py-1.5 text-xs font-bold uppercase tracking-widest text-brand-primary backdrop-blur-sm border border-brand-primary/20 hover:bg-brand-primary hover:text-white transition-all">
                {{ $category->name }}
              </a>
            @endforeach
         </div>

        <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl text-balance leading-[1.1]">
          {!! get_the_title() !!}
        </h1>

        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-8 pt-4">
          <div class="flex items-center gap-3">
             {!! get_avatar(get_the_author_meta('ID'), 48, '', '', ['class' => 'h-12 w-12 rounded-full border-2 border-brand-primary/30 ring-4 ring-brand-primary/5 transition-transform hover:scale-110']) !!}
             <div class="flex flex-col">
                <span class="text-sm font-bold text-white">{{ get_the_author() }}</span>
                <span class="text-xs text-gray-400 font-medium">{{ __('Author', 'sagepress') }}</span>
             </div>
          </div>
          
          <div class="flex items-center gap-6 border-l border-gray-700 pl-8">
             <div class="flex flex-col text-center sm:text-left">
                <time class="text-sm font-bold text-white" datetime="{{ get_post_time('c', true) }}">
                  {{ get_the_date() }}
                </time>
                <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">{{ __('Published', 'sagepress') }}</span>
             </div>
             <div class="flex flex-col text-center sm:text-left">
                <span class="text-sm font-bold text-white italic">
                  @php($read_time = round(str_word_count(strip_tags(get_the_content())) / 200))
                  {{ $read_time > 0 ? $read_time : 1 }} {{ __('min read', 'sagepress') }}
                </span>
                <span class="text-xs text-gray-400 font-medium uppercase tracking-wider">{{ __('Estimated', 'sagepress') }}</span>
             </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Content Section -->
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-12 sm:mt-16 xl:mt-24">
    <div class="max-w-4xl mx-auto flex flex-col lg:flex-row gap-16 xl:gap-24">
      
      <!-- Primary Article Content -->
      <div class="content flex-1 max-w-none">
        <div class="prose prose-lg prose-brand prose-headings:font-extrabold prose-a:text-brand-primary hover:prose-a:text-brand-secondary prose-img:rounded-2xl prose-img:shadow-2xl prose-img:shadow-blue-500/10 prose-code:text-brand-primary/80 prose-code:bg-brand-primary/5 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded-md prose-code:before:content-none prose-code:after:content-none leading-relaxed text-gray-700 selection:bg-brand-primary/20">
          @php(the_content())
        </div>

        @if (get_the_tags())
          <div class="mt-20 border-t border-gray-100 pt-10">
            <h3 class="text-sm font-bold uppercase tracking-wider text-gray-400 mb-6">{{ __('Post Tags', 'sagepress') }}</h3>
            <div class="flex flex-wrap gap-3">
              @foreach(get_the_tags() as $tag)
                <a href="{{ get_tag_link($tag->term_id) }}" class="inline-flex items-center rounded-xl bg-gray-100 px-4 py-2 text-sm font-semibold text-gray-600 hover:bg-brand-primary hover:text-white transition-all transform hover:-translate-y-0.5">
                  <span class="mr-2 opacity-40">#</span>{{ $tag->name }}
                </a>
              @endforeach
            </div>
          </div>
        @endif

        <div class="mt-20">
           @php(comments_template())
        </div>
      </div>

      <!-- Article Sidebar / Author Meta (Optional - sticky) -->
      <aside class="hidden xl:block w-72 shrink-0">
        <div class="sticky top-32 space-y-12">
          <!-- Table of Contents Placeholder -->
          <div class="space-y-6">
            <h4 class="text-xs font-bold uppercase tracking-widest text-brand-primary/50">{{ __('Information', 'sagepress') }}</h4>
            <div class="space-y-4">
              <div class="flex items-center justify-between text-sm py-4 border-b border-gray-100">
                <span class="text-gray-500 font-medium">Comments</span>
                <span class="font-bold text-gray-900 bg-gray-100 px-2.5 py-1 rounded-lg">{{ get_comments_number() }}</span>
              </div>
              <div class="flex items-center justify-between text-sm py-4 border-b border-gray-100">
                <span class="text-gray-500 font-medium">Last Updated</span>
                <span class="font-bold text-gray-900">{{ get_the_modified_date('M d, Y') }}</span>
              </div>
            </div>
          </div>

          <!-- Share Section -->
          <div class="space-y-6">
             <h4 class="text-xs font-bold uppercase tracking-widest text-brand-primary/50">{{ __('Share Article', 'sagepress') }}</h4>
             <div class="flex gap-4">
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(get_permalink()) }}" class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-500 transition-all border border-transparent hover:border-blue-200 shadow-sm" target="_blank" rel="noopener">
                  <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(get_permalink()) }}" class="flex h-10 w-10 items-center justify-center rounded-xl bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-700 transition-all border border-transparent hover:border-blue-300 shadow-sm" target="_blank" rel="noopener">
                   <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
             </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</article>
