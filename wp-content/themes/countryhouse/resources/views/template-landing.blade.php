{{--
  Template Name: Landing Template
--}}

@extends('layouts.landing')
@section('content')
@while(have_posts()) @php(the_post())

<?php if (post_password_required()) {

  // if your post is password protected with our Pro version, show our password form instead
  echo my_password_form();

  /* display the password protected content if the correct password is entered */
} else { ?>



  @include('partials.flexible-content')

<?php } ?>

@endwhile
@endsection