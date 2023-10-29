import Swiper from 'swiper/bundle';
//import Swiper from '../autoload/_swiper-bundle.js';
import $ from 'jquery';

class ValuesCarousel {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    console.log('valuesCarousel');

    var swiperClass = '.section-values-carousel';

    $(swiperClass).each(function (index) {
      console.log('valuesCarousel');

      var swiperID = 'values-' + index;
      var swiperIDHash = '#values-' + index;

      $('.values-wrapper', this).attr('id', swiperID);
      //$('.swiper-button-next', this).attr('id', swiperID + '-next');
      //$('.swiper-button-prev', this).attr('id', swiperID + '-next');

      var homeSwiper = new Swiper(swiperIDHash + ' .values-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
          1024: {
            slidesPerView: 'auto',
            spaceBetween: 0,
          },
        },

        // loop: true,

        pagination: {
          el: swiperIDHash + ' .pagination',
          clickable: true,
        },
        navigation: {
          nextEl: swiperIDHash + ' .button-next',
          prevEl: swiperIDHash + ' .button-prev',
        },
        // navigation: {
        //   nextEl: swiperIDHash + ' .swiper-button-next',
        //   prevEl: swiperIDHash + ' .swiper-button-prev',
        // },
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

export default ValuesCarousel;
