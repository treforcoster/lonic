@extends('layouts.full-width-dark')

@section('content')
  @include('components.headers.header-property-archive')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="container-fluid  padding-top-intro padding-bottom-intro text-center bg-colour-light text-dark ">
      <h3>Our Current Instructions</h3>
  </div>


  <div class="container-fluid  padding-bottom-intro bg-colour-light">
    {{-- <div id="property-grid" class="row g-5"> --}}
      <div id="property-grid" >

  @while(have_posts()) @php(the_post())

  <?php $size = get_field('post_size', get_the_ID()); ?>
  <?php $colSize = "";?>
  <?php if($size ==="large"){
    $colSize = "col-large";
  } else {
    $colSize = "col-small";
  } ?>

    <div class="property-post <?php echo $colSize;?>">
   
      
      @include('components.cards.card-property-archive')

    </div>

  @endwhile

    </div>
  </div>


  {!! get_the_posts_navigation() !!}
@endsection


