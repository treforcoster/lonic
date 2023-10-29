import Swiper from 'swiper/bundle';
//import Swiper from '../autoload/_swiper-bundle.js';
import $ from 'jquery';

class TestimonialCarousel {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    console.log('testimonialCarousel');

    var swiperClass = '.section-testimonial-carousel';

    $(swiperClass).each(function (index) {
      console.log('testimonialCarousel');

      var swiperID = 'testimonial-' + index;
      var swiperIDHash = '#testimonial-' + index;

      $('.testimonial-wrapper', this).attr('id', swiperID);
      //$('.swiper-button-next', this).attr('id', swiperID + '-next');
      //$('.swiper-button-prev', this).attr('id', swiperID + '-next');

      var homeSwiper = new Swiper(swiperIDHash + ' .testimonial-swiper', {
        slidesPerView: 2.5,
        spaceBetween: 30,
        //loopedSlides: 3,
        // loop: true,

        pagination: {
          el: swiperIDHash + ' .swiper-pagination',
          clickable: true,
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

export default TestimonialCarousel;
