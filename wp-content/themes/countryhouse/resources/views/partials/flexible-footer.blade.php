@if(have_rows('footer', 'options'))
    {{-- loop through the rows of data --}}
    @while (have_rows('footer', 'options')) @php(the_row())

    @if(get_row_layout() == 'section_text')

    @include('components.sections.section-text')

    @endif

    @if(get_row_layout() == 'section_2_column_text')

      @include('components.sections.section-2-column-text')

    @endif

    @if(get_row_layout() == 'section_2_column_text_image')

      @include('components.sections.section-2-column-text-image')

    @endif

    @if(get_row_layout() == 'section_carousel')

      @include('components.sections.section-carousel')

    @endif

    @if(get_row_layout() == 'section_icon_cards')

      @include('components.sections.section-icon-cards')

    @endif

    @if(get_row_layout() == 'section_floor_selector_gallery')

      @include('components.sections.section-floor-selector-gallery')

    @endif
    
    

   @endwhile
@else
   {{-- no layouts found --}}
@endif
