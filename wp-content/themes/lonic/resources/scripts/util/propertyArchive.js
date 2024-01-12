import 'masonry-layout/dist/masonry.pkgd.js';
import $ from 'jquery';

class PropertyArchive {
  constructor() {
    if ($('#property-grid').length) {
      var msnry = new Masonry('#property-grid', {
        // options...
      });
    }
  }
}

export default PropertyArchive;
