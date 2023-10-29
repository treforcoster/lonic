import Swiper from 'swiper/bundle';
import $ from 'jquery';

class QuoteCarousel {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    console.log('QuoteCarousel');

    var swiperClass = '.section-quotes-carousel';

    $(swiperClass).each(function (index) {
      console.log('TestimonialCarousel');

      var swiperID = 'quote-' + index;
      var swiperIDHash = '#quote-' + index;

      $('.quote-wrapper', this).attr('id', swiperID);
      //$('.swiper-button-next', this).attr('id', swiperID + '-next');
      //$('.swiper-button-prev', this).attr('id', swiperID + '-next');

      var homeSwiper = new Swiper(swiperIDHash + ' .quote-swiper', {
        breakpoints: {
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 1,
          },
          1024: {
            slidesPerView: 1.5,
          },
        },

        centeredSlides: true,
        //spaceBetween: 80,
        //centeredSlidesBounds: true,
        //centerInsufficientSlides: true,
        //paginationClickable: true,
        //spaceBetween: 80,
        //slideToClickedSlide: true,
        initialSlide: 1,
        //loop: true,
        //cssMode: true,
        effect: 'coverflow',
        coverflowEffect: {
          rotate: 0,
          stretch: 1,
          depth: 500,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: swiperIDHash + ' .swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: swiperIDHash + ' .swiper-button-next',
          prevEl: swiperIDHash + ' .swiper-button-prev',
        },
        on: {
          init() {
            setTimeout(() => {
              window.dispatchEvent(new Event('resize'));
            }, 200);
          },
        },
      });

      homeSwiper.on('transitionStart', function () {
        //console.log('transitionStart');
      });
    });
  }
}

export default QuoteCarousel;
