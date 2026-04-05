{{--
  Sidebar Partial
  Widget area for blog pages
--}}
<aside class="space-y-8">
  {{-- Search Widget --}}
  <section>
    <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-500 mb-4">{{ __('Search', 'sagepress') }}</h3>
    {!! get_search_form(false) !!}
  </section>

  {{-- Recent Posts --}}
  <section>
    <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-500 mb-4">{{ __('Recent Posts', 'sagepress') }}</h3>
    @php
      $recent = new WP_Query([
        'posts_per_page' => 5,
        'post_status' => 'publish',
      ]);
    @endphp
    @if ($recent->have_posts())
      <ul class="space-y-3">
        @while ($recent->have_posts())
          @php($recent->the_post())
          <li>
            <a href="{{ get_permalink() }}" class="text-sm text-gray-700 hover:text-blue-600 transition-colors">
              {{ get_the_title() }}
            </a>
            <time class="block text-xs text-gray-400 mt-1">{{ get_the_date() }}</time>
          </li>
        @endwhile
      </ul>
      @php(wp_reset_postdata())
    @endif
  </section>

  {{-- Categories --}}
  <section>
    <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-500 mb-4">{{ __('Categories', 'sagepress') }}</h3>
    {!! wp_list_categories([
      'title_li' => '',
      'show_count' => true,
      'echo' => false,
    ]) !!}
  </section>

  {{-- Tags --}}
  <section>
    <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-500 mb-4">{{ __('Tags', 'sagepress') }}</h3>
    <div class="flex flex-wrap gap-2">
      {!! wp_tag_cloud([
        'smallest' => 12,
        'largest' => 12,
        'unit' => 'px',
        'number' => 20,
        'format' => 'flat',
        'echo' => false,
      ]) !!}
    </div>
  </section>

  {{-- Dynamic Sidebar --}}
  @if (is_active_sidebar('sidebar-primary'))
    {!! dynamic_sidebar('sidebar-primary') !!}
  @endif
</aside>
