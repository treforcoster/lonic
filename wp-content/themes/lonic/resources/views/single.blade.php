@extends('layouts.full-width')

@section('content')
  @while(have_posts()) @php(the_post())

  @include('components.headers.header-blog')
    {{-- @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single']) --}}
    <div id='content'>

      @include('partials.flexible-content')
    </div>
  @endwhile
@endsection
