@extends('layouts.full-width-dark')

@section('content')
  @include('components.headers.header-archive')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  <div class="container-fluid  padding-top-intro padding-bottom-intro text-center bg-colour-light text-dark ">
    <h3>Latest News</h3>
</div>

<div class="container-fluid  padding-bottom-intro bg-colour-light">

  <div id="blog-archive" class="are-images-unloaded">

  @while(have_posts()) @php(the_post())
    {{-- @includeFirst(['partials.content-' . get_post_type(), 'partials.content']) --}}


    <?php $size = get_field('post_size', get_the_ID()); ?>
    <?php $colSize = "";?>
    <?php if($size ==="large"){
      $colSize = "col-large";
    } elseif($size ==="medium"){
      $colSize = "col-large";
    } else {
      $colSize = "col-small";
    } ?>
  
      <div class="post <?php echo $colSize;?>">
     
        @include('components.cards.card-post-archive')
  
      </div>
  @endwhile

  </div>
  <?php // previous_posts_link(); ?>
  <div class="pagination">
  <?php next_posts_link(); ?>
  </div>
  
  
  {{-- {!! get_the_posts_navigation() !!} --}}

</div>
@endsection
