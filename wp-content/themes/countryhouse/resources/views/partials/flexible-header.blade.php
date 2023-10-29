@if(have_rows('header'))
    {{-- loop through the rows of data --}}

  
    @while (have_rows('header')) @php(the_row())

    @if(get_row_layout() == 'header_video')

      @include('components.headers.header-video')
    @endif

   @endwhile
@else
   {{-- no layouts found --}}
@endif
