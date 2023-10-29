@extends('layouts.full-width-dark')

@section('content')
@include('components.sections.section-property-archive-header')

@if (! have_posts())
<x-alert type="warning">
  {!! __('Sorry, no results were found.', 'sage') !!}
</x-alert>

{!! get_search_form(false) !!}
@endif

<div id="filter-bar" class="bg-colour-white medium" data-rate="<?php the_field('currency_USDGBP', 'options'); ?>" data-eurrate="<?php the_field('currency_USDEUR', 'options'); ?>">
  <div class="container-fluid ">
    <div class="row justify-content-between">
      <div class="col-md-3 order-lg-2">
        <div id="view-controls">
          <div class="view-btn grid-btn active small-caps">
            <svg class="icon grid-icon" data-name="Group 13472" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28.625" height="17.398" viewBox="0 0 28.625 17.398">
              <defs>
                <style>
                  .grid-cls-1,
                  .grid-cls-3 {
                    fill: #d5a65a;
                  }

                  .grid-cls-2 {
                    clip-path: url(#clip-path);
                  }

                  .grid-cls-3 {
                    fill-rule: evenodd;
                  }
                </style>
                <clipPath id="clip-path">
                  <rect id="Rectangle_118" data-name="Rectangle 118" class="grid-cls-1" width="28.626" height="17.399" />
                </clipPath>
              </defs>
              <g id="Group_13068" data-name="Group 13068" class="grid-cls-2">
                <path id="Path_1454" data-name="Path 1454" class="grid-cls-3" d="M6.212,6.877H.665A.665.665,0,0,1,0,6.212V.665A.665.665,0,0,1,.665,0H6.212a.665.665,0,0,1,.665.665V6.212a.665.665,0,0,1-.665.665" />
                <path id="Path_1455" data-name="Path 1455" class="grid-cls-3" d="M142.212,6.877h-5.547A.665.665,0,0,1,136,6.212V.665A.665.665,0,0,1,136.665,0h5.547a.665.665,0,0,1,.665.665V6.212a.665.665,0,0,1-.665.665" transform="translate(-125.125)" />
                <path id="Path_1456" data-name="Path 1456" class="grid-cls-3" d="M278.211,6.877h-5.547A.665.665,0,0,1,272,6.212V.665A.665.665,0,0,1,272.664,0h5.547a.665.665,0,0,1,.665.665V6.212a.665.665,0,0,1-.665.665" transform="translate(-250.25)" />
                <path id="Path_1457" data-name="Path 1457" class="grid-cls-3" d="M6.212,138.467H.665A.665.665,0,0,1,0,137.8v-5.547a.665.665,0,0,1,.665-.665H6.212a.665.665,0,0,1,.665.665V137.8a.665.665,0,0,1-.665.665" transform="translate(0 -121.068)" />
                <path id="Path_1458" data-name="Path 1458" class="grid-cls-3" d="M142.212,138.467h-5.547A.665.665,0,0,1,136,137.8v-5.547a.665.665,0,0,1,.665-.665h5.547a.665.665,0,0,1,.665.665V137.8a.665.665,0,0,1-.665.665" transform="translate(-125.125 -121.068)" />
                <path id="Path_1459" data-name="Path 1459" class="grid-cls-3" d="M278.211,138.467h-5.547A.665.665,0,0,1,272,137.8v-5.547a.665.665,0,0,1,.665-.665h5.547a.665.665,0,0,1,.665.665V137.8a.665.665,0,0,1-.665.665" transform="translate(-250.25 -121.068)" />
              </g>
            </svg>


            <span>Grid View</span>
          </div>


          <div class="view-btn map-btn small-caps">
            <svg class="icon map-icon" data-name="Group 13473" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.943" height="20.732" viewBox="0 0 22.943 20.732">
              <defs>
                <style>
                  .map-cls-1,
                  .map-cls-3 {
                    fill: #3b646a;
                  }

                  .map-cls-2 {
                    clip-path: url(#clip-path);
                  }

                  .map-cls-3 {
                    fill-rule: evenodd;
                  }
                </style>
                <clipPath id="clip-path">
                  <rect id="Rectangle_117" data-name="Rectangle 117" class="map-cls-1" width="22.944" height="20.732" />
                </clipPath>
              </defs>
              <path id="Path_1450" data-name="Path 1450" class="map-cls-1" d="M0,0V14.081l6.576,2.287V2.287Z" />
              <g id="Group_13066" data-name="Group 13066" transform="translate(0 0)">
                <g id="Group_13065" data-name="Group 13065" class="map-cls-2">
                  <path id="Path_1451" data-name="Path 1451" class="map-cls-3" d="M184.836,0,178.26,2.287V16.368l6.075-2.144a4.663,4.663,0,0,1,.5-4Z" transform="translate(-170.683)" />
                  <path id="Path_1452" data-name="Path 1452" class="map-cls-3" d="M356.52,10.547V1.684l6.5,2.287v6.075a5.278,5.278,0,0,0-6.5.5Z" transform="translate(-341.367 -1.612)" />
                  <path id="Path_1453" data-name="Path 1453" class="map-cls-3" d="M345.6,203.484a4.18,4.18,0,0,1,4.217,4.217c0,1.858-2.43,5.432-3.788,7.577-.429.572-.786.143-.858,0-1.287-2.144-3.788-5.933-3.788-7.577A4.18,4.18,0,0,1,345.6,203.484Zm0,2.144a1.966,1.966,0,1,1-2,2,2,2,0,0,1,2-2" transform="translate(-326.871 -194.835)" />
                </g>
              </g>
            </svg>

            <span>Map View</span>
          </div>

          <!-- <a class='contact_link ' href="<?php echo get_field('contact_link', 'options'); ?>">Contact us</a> -->
        </div>
      </div>
      <div class="col-md-9 order-lg-1">
        <div class="filter-controls text-dark">

          <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="grid-filters" class='filters'>
            <?php
            if ($terms = get_terms(array('taxonomy' => 'location', 'orderby' => 'name', 'hide_empty' => true,))) :
              echo '<select id="location_filter" name="categoryfilter" class="filter-dropdown location small-caps"><option value="*">Location</option>';
              //echo '<select id="location_filter" name="categoryfilter" class="filter-dropdown location small-caps"><option></option><option value="*">All Locations</option>';

              foreach ($terms as $term) :
                echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
              endforeach;
              echo '</select>';
            endif;
            ?>


            <input id="price_min" name='price_min'>
            <input id="price_max" name='price_max'>

            <div id="currency_selector" class="small-caps">
              <span id='currency_gbp' class="currency active">GBP</span><span id='currency_eur' class="currency">EUR</span><span id='currency_usd' class="currency">USD</span>
            </div>

            <div id="slider-pounds">
              <label for="pounds-price small-caps">Price range</label>
              <div id="pounds-price-slider"></div>
              <span id="pounds-price">

            </div>

            <select id="status_filter" name='statusFilter' class='filter-dropdown status small-caps'>
              <option></option>
              <option value="*">All</option>
              <option value="For Sale">For Sale</option>
              <option value="Under Offer">Under Offer</option>
              <option value="Sold">Sold</option>
            </select>
            <!-- <button>Apply filter</button> -->
            <input type="hidden" name="action" value="myfilter">
          </form>



          <div id="map-filters" class='filters'>
            <?php
            if ($terms = get_terms(array('taxonomy' => 'location', 'orderby' => 'name', 'hide_empty' => true,))) :
              // echo '<select id="map_location_filter" name="categoryfilter" class="custom-select "><option value="-1">Location</option>';
              echo '<select id="map_location_filter" name="categoryfilter" class="filter-dropdown location small-caps"><option value="-1">Location</option>';
              foreach ($terms as $term) :
                echo '<option value="' . $term->name . '">' . $term->name . '</option>'; // ID of the category as the value of an option
              endforeach;
              echo '</select>';
            endif;
            ?>

            <div id="map_currency_selector" class="small-caps">
              <span id='map_currency_gbp' class="currency active">GBP</span><span id='map_currency_eur' class="currency">EUR</span><span id='map_currency_usd' class="currency">USD</span>
            </div>

            <input id="map_price_min" name='map_price_min'>
            <input id="map_price_max" name='map_price_max'>

            <div id="map_slider-pounds">
              <label for="map_pounds-price small-caps">Price range</label>
              <div id="map_pounds-price-slider"></div>
              <span id="map_pounds-price">

            </div>





            <select id="map_status_filter" name='statusFilter' class='filter-dropdown status small-caps'>
              <option value="-1">Status</option>
              <option value="For Sale">For Sale</option>
              <option value="Under Offer">Under Offer</option>
              <option value="Sold">Sold</option>
            </select>

            <input type="hidden" name="action" value="myfilter">
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<div id='grid-view' class='bg-colour-light gbp'>

  <div class='container-fluid p-t-mobile-intro p-b-mobile-intro p-t-desktop-intro p-b-desktop-intro bg-colour-light '>
    <div id="response" class='row'>

    </div>


    <!-- <div id="load" class="load-more">Load</div> -->


  </div>
</div>

<div id='map-view'>

  @include('components.sections.section-property-archive-map')

</div>
@endsection