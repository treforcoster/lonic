{{--
  Template Name: Home Template
--}}

@extends('layouts.full-width')
@section('content')
@while(have_posts()) @php(the_post())

@include('partials.flexible-header')

<div class="mobile-menu-background">
  <img class="logo-mobile" src="<?php the_field('logo_mobile', 'options'); ?>">
</div>



<div id='content'>

  @include('partials.flexible-content')
</div>

@endwhile
@endsection