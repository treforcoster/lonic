import Swiper from 'swiper/bundle';
//import Swiper from '../autoload/_swiper-bundle.js';
import $ from 'jquery';

class PropertyCarousel {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    console.log('propertyCarousel');

    var swiperClass = '.section-property-carousel';

    $(swiperClass).each(function (index) {
      console.log('propertyCarousel');

      var swiperID = 'property-' + index;
      var swiperIDHash = '#property-' + index;

      $('.property-wrapper', this).attr('id', swiperID);
      //$('.swiper-button-next', this).attr('id', swiperID + '-next');
      //$('.swiper-button-prev', this).attr('id', swiperID + '-next');

      var homeSwiper = new Swiper(swiperIDHash + ' .property-swiper', {
        spaceBetween: 20,
        slidesPerView: 1,
        breakpoints: {
          1024: {
            slidesPerView: 2.5,
            spaceBetween: 30,
          },
        },
        //loopedSlides: 3,
        // loop: true,

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

export default PropertyCarousel;
