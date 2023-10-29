import $ from 'jquery';
import { gsap } from 'gsap';
import 'jquery-ui/ui/core.js';
import 'jquery-ui/ui/widgets/slider.js';
import '../autoload/_jquery.ui.touch-punch.min.js';
import '@selectize/selectize/dist/js/selectize.js';
import 'select2/dist/js/select2.js';

class PropertyFilters {
  constructor() {
    let $activeCurrency = 'gpb';
    let $rate = $('#filter-bar').data('rate');
    let $eur_rate = $('#filter-bar').data('eurrate');
    let slider_min = 0;
    let slider_max = 25000000;

    // $('#location_filter').selectize({
    //   placeholder: 'Location',
    // });

    $('#location_filter').select2({
      minimumResultsForSearch: -1,
      placeholder: 'Location',
    });

    $('#status_filter').select2({
      minimumResultsForSearch: -1,
      placeholder: 'Status',
    });

    // $('#status_filter').selectize({
    //   placeholder: 'Status',
    // });

    $('#location_filter').on('change', function () {
      if (activeView == 'grid') {
        submitAjax();
      }
    });

    $('#status_filter').on('change', function () {
      if (activeView == 'grid') {
        submitAjax();
      }
    });

    $('#price_min').on('change', function () {
      if (activeView == 'grid') {
        submitAjax();
      }
    });

    $('#price_max').on('change', function () {
      if (activeView == 'grid') {
        submitAjax();
      }
    });
    let myTimeout;

    $('#pounds-price').text('£' + 0 + ' M  -  £' + 25 + ' M');

    $('#pounds-price-slider').slider({
      range: true,
      min: 0,
      max: 25000000,
      values: [0, 25000000],
      slide: function (event, ui) {
        slider_min = ui.values[0];
        slider_max = ui.values[1];

        setSliderDisplay();

        $('#price_min').val(ui.values[0]);
        $('#price_max').val(ui.values[1]);

        clearTimeout(myTimeout);
        myTimeout = setTimeout(submitAjax, 500);
      },
    });

    function setSliderDisplay() {
      if ($activeCurrency === 'gbp') {
        $('#pounds-price').text(
          '£' +
            Math.floor(slider_min / 1000000) +
            ' M - £' +
            Math.floor(slider_max / 1000000) +
            ' M'
        );
      } else if ($activeCurrency === 'usd') {
        $('#pounds-price').text(
          '$' +
            Math.floor(slider_min / $rate / 1000000) +
            ' M - $' +
            Math.floor(slider_max / $rate / 1000000) +
            ' M'
        );
      } else {
        $('#pounds-price').text(
          '€' +
            Math.floor(((slider_min / $rate) * $eur_rate) / 1000000) +
            ' M - €' +
            Math.floor(((slider_max / $rate) * $eur_rate) / 1000000) +
            ' M'
        );
      }
    }

    function submitAjax() {
      let filter = $('#grid-filters');

      $.ajax({
        url: filter.attr('action'),
        data: filter.serialize(), // form data
        type: filter.attr('method'), // POST

        beforeSend: function (xhr) {
          filter.find('button').text('Processing...'); // changing the button label
        },
        success: function (data) {
          filter.find('button').text('Apply filter'); // changing the button label back
          $('#response').html(data); // insert data
        },
      });
    }
    let $grid = $('#grid-view');
    let $map = $('#map-view');
    let $gridFilters = $('#grid-filters');
    let $mapFilters = $('#map-filters');

    gsap.set($map, { display: 'none' });
    gsap.set($mapFilters, { display: 'none' });

    let activeView = 'grid';

    setView('grid');

    function setView(v) {
      if (v == 'grid') {
        gsap.set($mapFilters, { display: 'none' });
        gsap.set($gridFilters, { display: 'flex' });
        $('.grid-btn').addClass('active');
        $('.map-btn').removeClass('active');
        // activeView = 'grid';
        gsap.set($grid, { display: 'block' });
        gsap.set($map, { display: 'none' });
      } else {
        gsap.set($mapFilters, { display: 'flex' });
        gsap.set($gridFilters, { display: 'none' });
        $('.grid-btn').removeClass('active');
        $('.map-btn').addClass('active');
        // activeView = 'map';
        gsap.set($grid, { display: 'none' });
        gsap.set($map, { display: 'block' });
      }
    }

    submitAjax();

    $('.grid-btn').click(function () {
      setView('grid');
      // gsap.set($mapFilters, { display: 'none' });
      // gsap.set($gridFilters, { display: 'flex' });
      // $('.grid-btn').addClass('active');
      // $('.map-btn').removeClass('active');
      // activeView = 'grid';
      // gsap.set($grid, { display: 'block' });
      // gsap.set($map, { display: 'none' });
    });

    $('.map-btn').click(function () {
      setView('map');
      // gsap.set($mapFilters, { display: 'flex' });
      // gsap.set($gridFilters, { display: 'none' });
      // $('.grid-btn').removeClass('active');
      // $('.map-btn').addClass('active');
      // activeView = 'map';
      // gsap.set($grid, { display: 'none' });
      // gsap.set($map, { display: 'block' });
    });

    let $usd = $('#currency_usd');
    let $gbp = $('#currency_gbp');
    let $eur = $('#currency_eur');
    let $grid_view = $('#grid-view');

    $usd.click(function () {
      $usd.addClass('active');
      $gbp.removeClass('active');
      $eur.removeClass('active');

      $grid_view.addClass('usd');
      $grid_view.removeClass('gpd');
      $grid_view.removeClass('eur');

      $activeCurrency = 'usd';

      setSliderDisplay();
    });

    $gbp.click(function () {
      $gbp.addClass('active');
      $usd.removeClass('active');
      $eur.removeClass('active');

      $grid_view.addClass('gpd');
      $grid_view.removeClass('usd');
      $grid_view.removeClass('eur');

      $activeCurrency = 'gbp';

      setSliderDisplay();
    });

    $eur.click(function () {
      $gbp.removeClass('active');
      $usd.removeClass('active');
      $eur.addClass('active');

      $grid_view.removeClass('gpd');
      $grid_view.removeClass('usd');
      $grid_view.addClass('eur');

      $activeCurrency = 'eur';

      setSliderDisplay();
    });

    let $loadMore = $('.load-more');

    $loadMore.click(function () {
      alert('click');
      let $propertyPost = $('.property-post');
      $propertyPost.removeClass('hidden');
    });
  }
}

export default PropertyFilters;
