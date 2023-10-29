import Swiper from 'swiper/bundle';
//import Swiper from '../autoload/_swiper-bundle.js';
import $ from 'jquery';

class SingletestimonialCarousel {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    console.log('------------ testimonialCarousel');

    var swiperClass = '.section-testimonial-single-carousel';

    $(swiperClass).each(function (index) {
      console.log('---------- testimonialCarousel');

      var swiperID = 'testimonial-' + index;
      var swiperIDHash = '#testimonial-' + index;

      $('.testimonial-wrapper', this).attr('id', swiperID);
      //$('.swiper-button-next', this).attr('id', swiperID + '-next');
      //$('.swiper-button-prev', this).attr('id', swiperID + '-next');

      var homeSwiper = new Swiper(swiperIDHash + ' .testimonial-swiper', {
        //loopedSlides: 3,
        // loop: true,
        speed: 500,
        //spaceBetween: 10,
        //loop: true,
        effect: 'fade',

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

export default SingletestimonialCarousel;
