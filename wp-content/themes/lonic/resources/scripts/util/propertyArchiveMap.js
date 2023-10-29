import Swiper from 'swiper/bundle';
//import Swiper from '../autoload/_swiper-bundle.js';
import $ from 'jquery';

class PropertyArchiveMap {
  constructor() {
    if ($('.section-property-archive-map').length) {
      var pointArray = [];
      var markers = [];

      // console.log("Map load via ajax call function");

      //console.log(data.apiLoaded);

      console.log('---------------------------- archive Map');

      function startMap() {
        var mapOptions;
        var MapPoints;
        var Zoom;

        let $rate = $('#filter-bar').data('rate');

        //console.log('use center', useCenter);
        //console.log('center around points');

        MapPoints = new google.maps.LatLng(0, 0);
        Zoom = 3;

        mapOptions = {
          zoom: Zoom,
          center: MapPoints,
          disableDefaultUI: true,
          panControl: false,
          zoomControl: true,
          zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL,
            position: google.maps.ControlPosition.RIGHT_BOTTOM,
          },
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'blue'],
          },
          scaleControl: false,
          //draggable: false,
          scrollwheel: false,

          styles: window.data.map_styles,
        };

        var map = new google.maps.Map(
          document.getElementById('map'),
          mapOptions
        );

        var markerBounds = new google.maps.LatLngBounds();
        var marker = $('.map-info').data('marker');
        var markerWidth = $('.map-info').data('marker-w');
        var markerHeight = $('.map-info').data('marker-h');
        var markerX = $('.map-info').data('marker-x');
        var markerY = $('.map-info').data('marker-y');

        console.log('marker', marker);

        function addMapMarker(m) {
          console.log('m ', m);
          const mainIcon = {
            url: marker,
            //url: 'http://countryhouse.test/wp-content/uploads/2023/05/map-1.svg',
            anchor: new google.maps.Point(markerX, markerY),
            scaledSize: new google.maps.Size(markerWidth, markerHeight),
          };
          const image = marker;

          var myMarker = new google.maps.Marker({
            position: m.points,
            map: map,
            title: m.title,
            icon: mainIcon,
            location: m.location,
            status: m.status,
            pricenum: m.pricenum,
          });

          let price = '';
          if (m.price) {
            price = '<div class="lead-in-heading">' + m.price + '</div>';
          }
          let status = '';
          if (m.status == 'Sold') {
            status = '<div class="tag">' + m.status + '</div>';
          }

          if (m.status == 'New') {
            status = '<div class="tag red">' + m.status + '</div>';
          }

          if (m.status == 'Under Offer') {
            status = '<div class="tag">' + m.status + '</div>';
          }
          // <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>"></img>
          var contentString =
            '<a class="content" href="' +
            m.url +
            '">' +
            '<img src="' +
            m.image +
            '"/>' +
            '<div class="bodyContent">' +
            '<div class="row">' +
            '<div class="col-8">' +
            '<div class="lead-in-heading">' +
            m.location +
            '</div>' +
            '<h2>' +
            m.title +
            '</h2>' +
            '</div>' +
            '<div class="col-4 text-right">' +
            price +
            status +
            '</div>' +
            '</div>' +
            '</div>' +
            '</a>';

          markerBounds.extend(m.points);
          myMarker.infoWindow = new google.maps.InfoWindow({
            content: contentString,
          });

          markers.push(myMarker);

          google.maps.event.addListener(myMarker, 'click', function () {
            markers.forEach((marker) => {
              marker.infoWindow.close();
            });

            myMarker.infoWindow.open(map, myMarker);
          });

          $('#map_location_filter').select2({
            minimumResultsForSearch: -1,
            placeholder: 'Location',
          });

          $('#map_status_filter').select2({
            minimumResultsForSearch: -1,
            placeholder: 'Status',
          });

          // $('#map_location_filter').on('change', function () {
          //   filterResults();
          // });

          // $('#map_status_filter').on('change', function () {
          //   filterResults();
          // });

          // $('#map_price_min').on('change', function () {
          //   filterResults();
          // });

          // $('#map_price_max').on('change', function () {
          //   filterResults();
          // });

          // function filterResults() {
          //   for (let i = 0; i < markers.length; i++) {
          //     markers[i].setVisible(true);
          //   }

          //   let location = $('#map_location_filter').val();
          //   let propertystatus = $('#map_status_filter').val();
          //   let pricemin = $('#map_price_min').val();
          //   let pricemax = $('#map_price_max').val();

          //   console.log('location ', location);

          //   if (location == -1) {
          //     console.log('no location filter');
          //   } else {
          //     for (let i = 0; i < markers.length; i++) {
          //       console.log('markers[i]', markers[i]);
          //       console.log('markers[i].location', markers[i].location);
          //       if (markers[i].location !== location) {
          //         markers[i].setVisible(false);
          //       }
          //     }
          //   }

          //   if (propertystatus == -1) {
          //     console.log('no status filter');
          //   } else {
          //     for (let i = 0; i < markers.length; i++) {
          //       if (markers[i].status !== propertystatus) {
          //         markers[i].setVisible(false);
          //       }
          //     }
          //   }

          //   if (pricemin == -1) {
          //     console.log('no pricemin filter');
          //   } else {
          //     for (let i = 0; i < markers.length; i++) {
          //       if (markers[i].pricenum > pricemin) {
          //         markers[i].setVisible(false);
          //       }
          //     }
          //   }

          //   if (pricemax == -1) {
          //     console.log('no pricmax filter');
          //   } else {
          //     for (let i = 0; i < markers.length; i++) {
          //       if (markers[i].pricenum < pricemax) {
          //         markers[i].setVisible(false);
          //       }
          //     }
          //   }

          //   map.fitBounds(markerBounds);
          // }

          // filters here

          //markerBounds.extend(mp);
        }
        setFliters();

        function setFliters() {
          let $activeCurrency = 'gbp';

          let $rate = $('#filter-bar').data('rate');
          let $eur_rate = $('#filter-bar').data('eurrate');
          let slider_min = 0;
          let slider_max = 25000000;

          $('#map_pounds-price').text('£' + 0 + ' M  -  £' + 25 + ' M');

          $('#map_pounds-price-slider').slider({
            range: true,
            min: 0,
            max: 25000000,
            values: [0, 25000000],
            slide: function (event, ui) {
              slider_min = ui.values[0];
              slider_max = ui.values[1];

              //setSliderDisplay();
              setSliderDisplay();
              // $('#map_price_min').val(ui.values[0]);
              // $('#map_price_max').val(ui.values[1]);

              $('#map_price_min').val(
                Math.floor(slider_min / 1000000) * 1000000
              );

              $('#map_price_max').val(
                Math.floor(slider_max / 1000000) * 1000000
              );

              filterResults();

              //console.log()

              //clearTimeout(myTimeout);
              //myTimeout = setTimeout(submitAjax, 500);
            },
          });

          let $usd = $('#map_currency_usd');
          let $gbp = $('#map_currency_gbp');
          let $eur = $('#map_currency_eur');
          let $grid_view = $('#grid-view');
          let $map_view = $('#map-view');

          $usd.click(function () {
            $usd.addClass('active');
            $gbp.removeClass('active');
            $eur.removeClass('active');

            $map_view.addClass('usd');
            $map_view.removeClass('gpd');
            $map_view.removeClass('eur');

            $activeCurrency = 'usd';

            setSliderDisplay();
          });

          $gbp.click(function () {
            $gbp.addClass('active');
            $usd.removeClass('active');
            $eur.removeClass('active');

            $map_view.addClass('gpd');
            $map_view.removeClass('usd');
            $map_view.removeClass('eur');

            $activeCurrency = 'gbp';

            setSliderDisplay();
          });

          $eur.click(function () {
            $eur.addClass('active');
            $usd.removeClass('active');
            $gbp.removeClass('active');

            $map_view.addClass('eur');
            $map_view.removeClass('usd');
            $map_view.removeClass('gbp');

            $activeCurrency = 'eur';

            setSliderDisplay();
          });

          function setSliderDisplay() {
            if ($activeCurrency === 'gbp') {
              $('#map_pounds-price').text(
                '£' +
                  Math.floor(slider_min / 1000000) +
                  ' M - £' +
                  Math.floor(slider_max / 1000000) +
                  ' M'
              );
            } else if ($activeCurrency === 'usd') {
              $('#map_pounds-price').text(
                '$' +
                  Math.floor(slider_min / $rate / 1000000) +
                  ' M - $' +
                  Math.floor(slider_max / $rate / 1000000) +
                  ' M'
              );
            } else {
              $('#map_pounds-price').text(
                '€' +
                  Math.floor(((slider_min / $rate) * $eur_rate) / 1000000) +
                  ' M - €' +
                  Math.floor(((slider_max / $rate) * $eur_rate) / 1000000) +
                  ' M'
              );
            }
          }

          $('#map_location_filter').on('change', function () {
            filterResults();
          });

          $('#map_status_filter').on('change', function () {
            filterResults();
          });

          function filterResults() {
            for (let i = 0; i < markers.length; i++) {
              markers[i].setVisible(true);
              markers[i].infoWindow.close();
            }

            let location = $('#map_location_filter').val();
            let propertystatus = $('#map_status_filter').val();
            let pricemin = $('#map_price_min').val();
            let pricemax = $('#map_price_max').val();

            //console.log('location ', location);
            console.log('propertystatus ', propertystatus);
            // console.log('pricemin ', pricemin);
            // console.log('pricemax ', pricemax);

            if (location == -1) {
              //console.log('no location filter');
            } else {
              for (let i = 0; i < markers.length; i++) {
                //console.log('markers[i]', markers[i]);
                //console.log('markers[i].location', markers[i].location);
                if (markers[i].location !== location) {
                  markers[i].setVisible(false);
                }
              }
            }

            if (propertystatus == -1) {
              console.log('no status filter');
            } else {
              console.log('----- status');
              for (let i = 0; i < markers.length; i++) {
                if (markers[i].status !== propertystatus) {
                  markers[i].setVisible(false);
                }
              }
            }

            if (pricemin == -1) {
              console.log('no pricemin filter');
            } else {
              for (let i = 0; i < markers.length; i++) {
                if (parseInt(markers[i].pricenum) < parseInt(pricemin)) {
                  markers[i].setVisible(false);
                }
              }
            }

            if (pricemax == -1) {
              console.log('no pricmax filter');
            } else {
              for (let i = 0; i < markers.length; i++) {
                if (parseInt(pricemax) < parseInt(markers[i].pricenum)) {
                  console.log(
                    'pricemax',
                    pricemax,
                    'markers[i].pricenum',
                    markers[i].pricenum
                  );
                  console.log('set false');
                  markers[i].setVisible(false);
                }
              }
            }

            map.fitBounds(markerBounds);
          }
        }

        $('.property-marker').each(function (index) {
          var p = {};

          p.lat = $(this).attr('data-lat');
          p.lon = $(this).attr('data-lon');
          p.title = $(this).attr('data-title');
          p.status = $(this).attr('data-status');
          p.price = $(this).attr('data-price');
          p.pricenum = $(this).attr('data-pricenum');
          p.location = $(this).attr('data-location');
          p.image = $(this).attr('data-image');
          p.url = $(this).attr('data-url');
          // data-lat="<?php echo $map['lat'];?>"
          //   data-lon="<?php echo $map['lon'];?>"
          //   data-title="<?php the_title();?>"
          //   data-status="<?php the_title();?>"
          //   data-price="<?php echo $price;?>"
          //   data-status="<?php echo $displayStatus;?>"
          //   data-location="<?php echo $terms[0]->name;?>"

          console.log('p', p);

          pointArray.push(p);
        });

        if (pointArray.length > 0) {
          for (var i = 0; i < pointArray.length; i++) {
            var m = {};

            m.points = new google.maps.LatLng(
              pointArray[i].lat,
              pointArray[i].lon
            );
            m.title = pointArray[i].title;
            m.image = pointArray[i].image;
            m.price = pointArray[i].price;
            m.pricenum = pointArray[i].pricenum;
            m.location = pointArray[i].location;
            m.status = pointArray[i].status;
            m.url = pointArray[i].url;
            addMapMarker(m);
          }
        }

        map.fitBounds(markerBounds);

        // $('.property-marker').each(function (index) {
        //   $(this).click(function (e) {
        //     e.preventDefault();

        //     var target = '#map';

        //     TweenMax.to(window, 1, {
        //       scrollTo: { y: target, autoKill: false },
        //       ease: Power2.easeInOut,
        //     });

        //     google.maps.event.trigger(markers[index], 'click');
        //   });
        // });
      }

      function runAPITimercheck() {
        console.log('runAPITimercheck');

        console.log(window.data.apiLoaded);

        if (window.data.apiLoaded === true) {
          console.log('run map');

          // initMap();

          startMap();

          //run map
        } else {
          console.log('check map API again');

          // / setTimeout(runAPITimercheck, 500);
        }
      }

      runAPITimercheck();
    }
  }
}

export default PropertyArchiveMap;
