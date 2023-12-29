@if(have_rows('content'))
{{-- loop through the rows of data --}}
@while (have_rows('content')) @php(the_row())

@if(get_row_layout() == 'intro_text_links')

@include('components.sections.section-text-links')

@endif

@if(get_row_layout() == 'text_&_image')

@include('components.sections.section-text-image')

@endif

@if(get_row_layout() == 'carousel')
@include('components.sections.section-expanding-carousel')
@endif

@if(get_row_layout() == 'text_&_stats')
@include('components.sections.section-text-stats')
@endif

@if(get_row_layout() == 'testimonials')
@include('components.sections.section-quotes-carousel')
@endif

@if(get_row_layout() == 'featured_properties')
@include('components.sections.section-property-carousel')
@endif

@if(get_row_layout() == 'approach_carousel')
@include('components.sections.section-approach-carousel')
@endif

@if(get_row_layout() == 'logo_block')
@include('components.sections.section-logo-block')
@endif

@if(get_row_layout() == 'contact_form')
@include('components.sections.section-contact-form')
@endif

@if(get_row_layout() == 'text_video')
@include('components.sections.section-text-video')
@endif

@if(get_row_layout() == 'values_carousel')
@include('components.sections.section-values-carousel')
@endif

@if(get_row_layout() == 'location_carousel')
@include('components.sections.section-locations-carousel')
@endif

@if(get_row_layout() == 'team_grid')
@include('components.sections.section-team-grid')
@endif

@if(get_row_layout() == 'contact_block')
@include('components.sections.section-contact-block')
@endif

@if(get_row_layout() == 'quote_block')
@include('components.sections.section-quote-block')
@endif

@if(get_row_layout() == 'centred_text_block')
@include('components.sections.section-text-block')
@endif

@if(get_row_layout() == 'gallery')
@include('components.sections.section-landing-gallery')
@endif

@if(get_row_layout() == 'accordion')
@include('components.sections.section-accordion')
@endif

@if(get_row_layout() == 'area_map')
@include('components.sections.section-area-map')
@endif

@endwhile
@else
{{-- no layouts found --}}
@endif