// import 'infinite-scroll/dist/infinite-scroll.pkgd.js';
//import 'imagesloaded/imagesloaded.pkgd.js'
import imagesLoaded from '../util/imagesloaded.pkgd.js';
import $ from 'jquery';

class BlogArchive {
  constructor() {
    if ($('#blog-archive').length) {
      console.log('blog archive');

      // init Masonry

      var $grid = $('#blog-archive').masonry({
        //itemSelector: 'none', // select none at first
        //columnWidth: '.grid__col-sizer',
        //gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 300,
        // nicer reveal transition
        transitionDuration: '0.8s',
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(50px)', opacity: 0 },
      });

      // get Masonry instance
      var msnry = $grid.data('masonry');

      // initial items reveal
      // $grid.imagesLoaded(function () {
      //   console.log('images loaded');
      //   // $grid.removeClass('are-images-unloaded');
      //   // $grid.masonry('option', { itemSelector: '.post' });
      //   // var $items = $grid.find('.post');
      //   // $grid.masonry('appended', $items);
      // });

      $grid
        .imagesLoaded()
        .always(function (instance) {
          console.log('all images loaded');
        })
        .done(function (instance) {
          console.log('all images successfully loaded');
        })
        .fail(function () {
          console.log('all images loaded, at least one is broken');
        })
        .progress(function (instance, image) {
          var result = image.isLoaded ? 'loaded' : 'broken';
          console.log('image is ' + result + ' for ' + image.img.src);
        });

      let infScroll = new InfiniteScroll('#blog-archive', {
        // options
        path: '.next-page',
        append: '.post',
        history: false,
        outlayer: msnry,
        hideNav: '.pagination',
      });
    }
  }
}

export default BlogArchive;
