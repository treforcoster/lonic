import Swiper from 'swiper/bundle';
//import Swiper from '../autoload/_swiper-bundle.js';
import $ from 'jquery';

class BlogGallery {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    var swiperClass = '.section-blog-gallery';

    $(swiperClass).each(function (index) {
      console.log('blogGallery');

      var swiperID = 'blog-gallery-' + index;
      var swiperIDHash = '#blog-gallery-' + index;

      $('.gallery-wrapper', this).attr('id', swiperID);
      //$('.swiper-button-next', this).attr('id', swiperID + '-next');
      //$('.swiper-button-prev', this).attr('id', swiperID + '-next');

      var homeSwiper = new Swiper(swiperIDHash + ' .blog-gallery', {
        slidesPerView: 1,

        pagination: {
          el: swiperIDHash + ' .pagination',
          clickable: true,
        },
        navigation: {
          nextEl: swiperIDHash + ' .button-next',
          prevEl: swiperIDHash + ' .button-prev',
        },
        // on: {
        //   init() {
        //     setTimeout(() => {
        //       window.dispatchEvent(new Event('resize'));
        //     }, 200);
        //   },
        // },
      });

      // homeSwiper.on('transitionStart', function () {
      //   //console.log('transitionStart');
      // });
    });
  }
}

export default BlogGallery;
