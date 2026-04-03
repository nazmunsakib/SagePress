<div class="page-header bg-brand-dark py-24 sm:py-32 xl:py-40">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl">
      <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl text-balance leading-[1.1] mb-6">
        {!! $title !!}
      </h1>
      @if (get_post_type() === 'post')
        <p class="text-lg text-gray-400 font-medium leading-relaxed max-w-xl">
           {{ __('The latest news, stories, and insights from the team at SagePress.', 'sagepress') }}
        </p>
      @endif
    </div>
  </div>
</div>
