import Swiper from 'swiper/bundle';
//import Swiper from '../autoload/_swiper-bundle.js';
import $ from 'jquery';

class ApproachCarousel {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    console.log('approachCarousel');

    var swiperClass = '.section-approach-carousel';

    $(swiperClass).each(function (index) {
      console.log('approachCarousel');

      var swiperID = 'approach-' + index;
      var swiperIDHash = '#approach-' + index;

      $('.approach-wrapper', this).attr('id', swiperID);

      var approachSwiper = new Swiper(swiperIDHash + ' .approach-swiper', {
        //slidesPerView: 'auto',
        spaceBetween: 20,
        slidesPerView: 0.93,
        breakpoints: {
          1024: {
            //slidesPerView: 'auto',
            slidesPerView: 4,
          },
        },

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

export default ApproachCarousel;
