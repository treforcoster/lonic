@extends('layouts.full-width-light')

@section('content')
@include('components.sections.section-testimonial-archive-header')

@if (! have_posts())
<x-alert type="warning">
  {!! __('Sorry, no results were found.', 'sage') !!}
</x-alert>

{!! get_search_form(false) !!}
@endif

<div class="container-fluid  p-b-desktop-intro">
  <div class="grid" style="--bs-gap: 5rem;">

    @while(have_posts()) @php(the_post())

    <div class="g-col-6 g-col-md-4">

      @include('components.cards.card-testimonial-archive')

    </div>

    @endwhile

  </div>
</div>

{!! get_the_posts_navigation() !!}
@endsection