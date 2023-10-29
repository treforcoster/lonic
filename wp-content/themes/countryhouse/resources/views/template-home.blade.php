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

<div class="small-logo">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.17" height="102.957" viewBox="0 0 25.17 102.957">
    <defs>
      <style>
        .logo-small-1 {
          fill: none;
        }

        .logo-small-2 {
          clip-path: url(#clip-path);
        }

        .logo-small-3 {
          fill: #05282d;
        }

        .logo-small-4 {
          fill: #dda54b;
        }
      </style>
      <clipPath id="clip-path">
        <rect id="Rectangle_324" data-name="Rectangle 324" class="logo-small-1" width="102.957" height="25.169" />
      </clipPath>
    </defs>
    <g id="Group_13539" data-name="Group 13539" class="logo-small-2" transform="translate(0 102.957) rotate(-90)">
      <path id="Path_2156" data-name="Path 2156" class="logo-small-3" d="M44.129,16.111l3.561,2.558a16.677,16.677,0,0,1-4.737,5.013,11.441,11.441,0,0,1-6.189,1.487,12.028,12.028,0,0,1-8.885-3.457,12.342,12.342,0,0,1-3.492-9.128,12.055,12.055,0,0,1,3.561-9.058A12.248,12.248,0,0,1,36.937,0a12,12,0,0,1,6.534,1.763,9.759,9.759,0,0,1,4.08,4.563l-3.7,2.663Q41.6,4.218,36.8,4.218a7.477,7.477,0,0,0-5.532,2.317,8.32,8.32,0,0,0-2.247,6.05A8.349,8.349,0,0,0,31.267,18.6a7.349,7.349,0,0,0,5.532,2.35q4.771,0,7.33-4.84" transform="translate(-7.503 0)" />
      <path id="Path_2157" data-name="Path 2157" class="logo-small-3" d="M97.562,24.9H93V.7h4.564v9.75h10.579V.7H112.7V24.9h-4.564V14.666H97.562Z" transform="translate(-28.613 -0.215)" />
      <path id="Path_2158" data-name="Path 2158" class="logo-small-4" d="M73.749,7.443l4.031,4.031a4.81,4.81,0,0,0,0,6.8l-4.031,4.03-4.031-4.03a4.81,4.81,0,0,0,0-6.8Z" transform="translate(-21.451 -2.29)" />
      <path id="Path_2159" data-name="Path 2159" class="logo-small-3" d="M3.584,11.922H0V9.465h9.97v2.458H6.387v9.659h-2.8Z" transform="translate(0 -2.912)" />
      <path id="Path_2160" data-name="Path 2160" class="logo-small-3" d="M137.121,21.7h-3.948V9.471h3.948a7.4,7.4,0,0,1,4.925,1.572,5.538,5.538,0,0,1,1.886,4.559,5.545,5.545,0,0,1-1.886,4.541,7.451,7.451,0,0,1-4.925,1.554M136,19.147h1.38a3.826,3.826,0,0,0,2.725-.934A3.409,3.409,0,0,0,141.1,15.6a3.466,3.466,0,0,0-.995-2.629,3.783,3.783,0,0,0-2.725-.952H136Z" transform="translate(-40.974 -2.914)" />
    </g>
  </svg>

</div>

<div id='content'>

  @include('partials.flexible-content')
</div>

@endwhile
@endsection