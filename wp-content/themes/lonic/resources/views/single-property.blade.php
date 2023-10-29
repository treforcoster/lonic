@extends('layouts.full-width-dark')
@section('content')
@while(have_posts()) @php(the_post())

@include('components.sections.section-property-single-header')

@include('components.sections.section-property-single-hero')

@include('components.sections.section-property-single-general-info')

@include('components.sections.section-property-single-more-info')

@include('components.sections.section-property-single-carousel')

@include('components.sections.section-property-single-floorplan')

@include('components.sections.section-property-single-map')

@include('components.sections.section-property-single-further')

@include('components.sections.section-property-single-cta')


@endwhile
@endsection