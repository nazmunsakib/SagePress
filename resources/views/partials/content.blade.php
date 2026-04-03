<article @php(post_class('group flex flex-col overflow-hidden rounded-2xl bg-white border border-gray-100 shadow-xl shadow-blue-500/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-blue-500/10 h-full'))>
  <header class="relative block overflow-hidden aspect-[16/9]">
    @if (has_post_thumbnail())
      {!! get_the_post_thumbnail(get_the_ID(), 'large', [
        'class' => 'h-full w-full object-cover transition-transform duration-500 group-hover:scale-110 grayscale-x2 group-hover:grayscale-0',
        'loading' => 'lazy'
      ]) !!}
    @else
      <div class="h-full w-full bg-gradient-to-br from-brand-primary/10 to-brand-secondary/10 flex items-center justify-center p-8">
        <svg class="h-16 w-16 text-brand-primary/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
      </div>
    @endif

    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
    
    <div class="absolute top-4 left-4">
       @php($categories = get_the_category())
       @if ($categories)
         <span class="inline-flex items-center rounded-lg bg-white/90 px-3 py-1 text-xs font-bold uppercase tracking-wider text-brand-primary backdrop-blur-sm">
           {{ $categories[0]->name }}
         </span>
       @endif
    </div>
  </header>

  <div class="flex flex-1 flex-col p-8 lg:p-10">
    <div class="flex items-center gap-3 text-xs font-semibold uppercase tracking-widest text-gray-400 mb-4">
      <time datetime="{{ get_post_time('c', true) }}">
        {{ get_the_date() }}
      </time>
      <span class="text-gray-300">•</span>
      <span>@php($read_time = round(str_word_count(get_the_content()) / 200)) {{ $read_time > 0 ? $read_time : 1 }} min read</span>
    </div>

    <h2 class="text-2xl font-bold leading-snug tracking-tight text-gray-900 mb-4 decoration-brand-primary decoration-4 group-hover:underline underline-offset-8 transition-all">
      <a href="{{ get_permalink() }}">
        {!! get_the_title() !!}
      </a>
    </h2>

    <div class="mt-auto pt-6 border-t border-gray-100">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
          @php($author_id = get_the_author_meta('ID'))
          {!! get_avatar($author_id, 32, '', '', ['class' => 'h-8 w-8 rounded-full border-2 border-white ring-2 ring-brand-primary/5 transition-transform group-hover:scale-110']) !!}
          <span class="text-sm font-bold text-gray-700 transition-colors group-hover:text-brand-primary">
            {{ get_the_author() }}
          </span>
        </div>
        <div class="text-brand-primary transition-transform group-hover:translate-x-1">
          <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
             <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </div>
      </div>
    </div>
  </div>
</article>
