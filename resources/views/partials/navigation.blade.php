{{--
  Pagination Partial
  Reusable pagination component
--}}
@if (get_the_posts_pagination())
  <nav class="flex justify-center gap-2 mt-10" aria-label="{{ __('Posts pagination', 'sagepress') }}">
    {!! paginate_links([
      'prev_text' => '&larr; ' . __('Previous', 'sagepress'),
      'next_text' => __('Next', 'sagepress') . ' &rarr;',
      'type' => 'list',
      'before_page_number' => '<span class="sr-only">' . __('Page', 'sagepress') . ' </span>',
    ]) !!}
  </nav>
@endif
