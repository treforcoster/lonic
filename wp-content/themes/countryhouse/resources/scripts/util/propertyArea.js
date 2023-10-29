//import Swiper from '../autoload/_swiper-bundle.js';
import $ from 'jquery';

class PropertyArea {
  constructor(coords, center, map, stroke, color, hover, windows, areas, info) {
    const area = new google.maps.Polygon({
      paths: coords,
      strokeColor: stroke,
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor: color,
      fillOpacity: 0.16,
      active: false,
    });

    areas.push(area);

    let contentString =
      '<div class="content text-dark">' +
      '<h4>' +
      info.title +
      '</h4>' +
      '<div class="body-content">' +
      '<div class="address">' +
      info.content +
      '</div>' +
      '</div>' +
      '</div>';

    //this.active = false;

    google.maps.event.addListener(area, 'mouseover', function () {
      this.setOptions({ fillColor: hover, fillOpacity: 0.5 });
    });

    google.maps.event.addListener(area, 'mouseout', function () {
      if (!area.active) {
        this.setOptions({ fillColor: color, fillOpacity: 0.16 });
      }
    });

    // google.maps.event.addListener(area, 'mouseover', function () {
    //   this.setOptions({ fillColor: color });
    // });
    // google.maps.event.addListener(area, 'mouseout', function () {
    //   this.setOptions({ fillColor: color });
    // });
    google.maps.event.addListener(area, 'click', function () {
      for (let i = 0; i < areas.length; i++) {
        areas[i].setOptions({ fillColor: color, fillOpacity: 0.16 });
        areas[i].active = false;
      }
      this.setOptions({ fillColor: hover, fillOpacity: 0.5 });
      area.active = true;
      for (let i = 0; i < windows.length; i++) {
        windows[i].close();
      }

      infowindow.open(map);
    });

    const infowindow = new google.maps.InfoWindow({
      content: contentString,
      position: center,
    });

    windows.push(infowindow);

    area.setMap(map);
  }
}

export default PropertyArea;
