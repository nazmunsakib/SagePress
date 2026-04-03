@extends('layouts.app')

@section('content')
  <div class="error-404 flex flex-col items-center justify-center py-32 sm:py-48 text-center bg-white px-4">
    <div class="container mx-auto">
       <span class="text-[120px] font-black tracking-tighter text-slate-100 leading-none mb-8 block select-none">404</span>
       <h1 class="text-4xl font-black text-slate-900 tracking-tight mb-6">
         {{ __('Lost in the woods?', 'sagepress') }}
       </h1>
       <p class="text-lg text-slate-500 font-medium mb-12 max-w-sm mx-auto">
         {{ __('The page you are looking for might have been removed or had its name changed.', 'sagepress') }}
       </p>
       
       <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="{{ home_url('/') }}" class="btn btn-primary px-10 py-4 shadow-2xl shadow-brand-primary/20">
             {{ __('Go Back Home', 'sagepress') }}
          </a>
          <button type="button" class="btn bg-white border border-slate-100 text-slate-600 px-10 py-4 hover:bg-slate-50">
             {{ __('Try Searching', 'sagepress') }}
          </button>
       </div>
    </div>
  </div>
@endsection
