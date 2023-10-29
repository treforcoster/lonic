import $ from 'jquery';
class MapSingle {
  constructor() {
    if ($('.section-property-single-map').length) {
      console.log('---------------------------- section-map');

      let pointArray = [];
      let markers = [];
      let currentMarker;

      //console.log("---------------------------- Map");

      function getWindowSize() {
        if (document.body && document.body.offsetWidth) {
          self.winW = document.body.offsetWidth;
          self.winH = document.body.offsetHeight;
        }
        if (
          document.compatMode === 'CSS1Compat' &&
          document.documentElement &&
          document.documentElement.offsetWidth
        ) {
          self.winW = document.documentElement.offsetWidth;
          self.winH = document.documentElement.offsetHeight;
        }
        if (window.innerWidth && window.innerHeight) {
          self.winW = window.innerWidth;
          self.winH = window.innerHeight;
        }

        return { width: self.winW, height: self.winH };
      }

      function startMap() {
        var pointArray = [];
        var markers = [];
        var infoWindows = [];
        //var title = $('.map-info').data('title');
        //var description = $('.map-info').data('description');
        var lat = $('.map-info').data('lat');
        var lon = $('.map-info').data('lon');
        var mapZoom = $('.map-info').data('zoom');
        var marker = $('.map-info').data('marker');
        var markerWidth = $('.map-info').data('marker-w');
        var markerHeight = $('.map-info').data('marker-h');
        var markerX = $('.map-info').data('marker-x');
        var markerY = $('.map-info').data('marker-y');
        var mapOptions;

        console.log(
          'markerWidth ' + markerWidth + ' markerHeight ' + markerHeight
        );

        //console.log(lat, lon, mapZoom)

        var MapPoints = new google.maps.LatLng(lat, lon);

        mapOptions = {
          zoom: mapZoom,
          center: MapPoints,
          disableDefaultUI: true,
          panControl: false,
          zoomControl: true,
          mapTypeControl: true,
          zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL,
            position: google.maps.ControlPosition.RIGHT_BOTTOM,
          },
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'blue', 'satellite'],
            position: google.maps.ControlPosition.TOP_RIGHT,
          },
          mapTypeId: 'satellite',
          scaleControl: false,
          //draggable: false,
          scrollwheel: false,

          styles: window.data.map_styles,
        };

        let map = new google.maps.Map(
          document.getElementById('map'),
          mapOptions
        );

        var markerBounds = new google.maps.LatLngBounds();

        // const icon = {
        //   url: window.data.map_marker,
        //   anchor: new google.maps.Point(
        //     window.data.map_x_pos,
        //     window.data.map_y_pos
        //   ),
        //   scaledSize: new google.maps.Size(
        //     window.data.map_width,
        //     window.data.map_height
        //   ),
        // };

        // function createTestMarker() {
        //   const mainIcon = {
        //     //url: marker,
        //     //anchor: new google.maps.Point(0,0),
        //     //scaledSize: new google.maps.Size(52,60),
        //   };

        //   var myMarker = new google.maps.Marker({
        //     position: MapPoints,
        //     map: map,
        //     // title: title,
        //     // description: description,
        //     icon: mainIcon,
        //   });
        // }

        var markerWidth = $('.map-info').data('marker-w');
        var markerHeight = $('.map-info').data('marker-h');
        var markerX = $('.map-info').data('marker-x');
        var markerY = $('.map-info').data('marker-y');

        function createMainMarker() {
          const mainIcon = {
            url: marker,
            //url: 'http://countryhouse.test/wp-content/uploads/2023/05/map-1.svg',

            anchor: new google.maps.Point(markerX, markerY),
            scaledSize: new google.maps.Size(markerWidth, markerHeight),
          };
          const image = marker;

          var myMarker = new google.maps.Marker({
            position: MapPoints,
            map: map,
            icon: mainIcon,
          });

          let link;

          markerBounds.extend(MapPoints);

          //   myMarker.infoWindow = new google.maps.InfoWindow({
          //     content: contentString,
          //     disableAutoPan: true,
          //   });

          markers.push(myMarker);

          //   google.maps.event.addListener(myMarker, 'click', function () {
          //     currentMarker = myMarker;

          //     map.panTo(myMarker.getPosition());

          //     for (var i = 0; i < markers.length; i++) {
          //       markers[i].infoWindow.close();
          //     }

          //     myMarker.infoWindow.open(map, myMarker);
          //   });

          //   google.maps.event.addListener(
          //     myMarker.infoWindow,
          //     'closeclick',
          //     function () {
          //       map.panTo(currentMarker.getPosition());
          //     }
          //   );
        }

        createMainMarker();
      }

      function runAPITimercheck() {
        console.log('runAPITimercheck');

        console.log(window.data.apiLoaded);

        if (window.data.apiLoaded === true) {
          console.log('run map');

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

export default MapSingle;
