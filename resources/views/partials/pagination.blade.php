@if ($pagination = paginate_links([
  'type' => 'array',
  'prev_text' => '<span class="sr-only">Previous</span><svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" /></svg>',
  'next_text' => '<span class="sr-only">Next</span><svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>',
]))
  <nav class="isolate inline-flex -space-x-px rounded-md bg-white shadow-sm ring-1 ring-inset ring-gray-300" aria-label="Pagination">
    @foreach ($pagination as $link)
      @php
        $is_current = strpos($link, 'current') !== false;
        $class = "relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0";
        if ($is_current) {
          $class = "relative z-10 inline-flex items-center bg-brand-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-primary";
          $link = str_replace('aria-current="page"', '', $link); // removing duplicate if any
          $link = str_replace('class="', 'class="' . $class . ' ', $link);
        } else {
          $link = str_replace('class="', 'class="' . $class . ' ', $link);
          if (strpos($link, 'class=') === false) {
             $link = str_replace('<a ', '<a class="' . $class . '" ', $link);
             $link = str_replace('<span ', '<span class="' . $class . '" ', $link);
          }
        }
      @endphp
      {!! $link !!}
    @endforeach
  </nav>
@endif
