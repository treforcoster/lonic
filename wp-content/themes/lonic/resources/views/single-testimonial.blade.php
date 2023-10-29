@extends('layouts.full-width-light')
@section('content')
  @while(have_posts()) @php(the_post())

  @include('components.sections.section-testimonial-single-header')

  @include('components.sections.section-testimonial-single-video')

  @include('components.sections.section-testimonial-single-text')

  @include('components.sections.section-testimonial-single-carousel')
   

  @endwhile
@endsection
