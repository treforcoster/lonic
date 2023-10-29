{{--
  Template Name: Master Template
--}}

@extends('layouts.full-width-dark')
@section('content')
@while(have_posts()) @php(the_post())

@include('partials.flexible-content')

@endwhile
@endsection