import $ from 'jquery';
import { gsap } from 'gsap';
class ExpandingText {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    $('.section-property-single-more-info').each(function (index) {
      let openHeight = 0;
      let closedHeight = 0;
      $('.expanding-text').each(function (index) {
        let h = $(this)[0].scrollHeight;
        closedHeight = $(this).height();
        if (h > openHeight) {
          openHeight = h;
        }
      });

      let textOpen = false;
      setClosed();

      function setClosed() {
        $('.expanding-text').addClass('closed');
      }

      $('.bottom-bar').click(function () {
        if (textOpen) {
          textOpen = false;

          gsap.to('.expanding-text', {
            height: closedHeight,
            ease: 'sine.inOut',
            duration: 0.5,
            onComplete() {
              $('.expanding-text').addClass('closed');
            },
          });
          gsap.set('.vertical-line', { opacity: 1 });
        } else {
          textOpen = true;
          $('.expanding-text').removeClass('closed');
          gsap.to('.expanding-text', {
            height: openHeight,
            ease: 'sine.inOut',
            duration: 0.5,
          });
          gsap.set('.vertical-line', { opacity: 0 });
        }
      });
      $(window).on('resize', function () {
        $('.expanding-text').removeClass('closed');
        $('.expanding-text').each(function (index) {
          let h = $(this)[0].scrollHeight;
          if (h > openHeight) {
            openHeight = h;
          }
        });
        textOpen = true;
        gsap.set('.expanding-text', { height: openHeight });
      });
      //   $(window).on('resize', function () {
      //     if (textOpen) {
      //     } else {
      //       $('.expanding-text').removeClass('closed');
      //     }
      //     $('.expanding-text').each(function (index) {
      //       let h = $(this)[0].scrollHeight;
      //       closedHeight = $(this).height();
      //       if (h > openHeight) {
      //         openHeight = h;
      //       }
      //     });

      //     if (textOpen) {
      //     } else {
      //       $('.expanding-text').addClass('closed');
      //       gsap.set('.expanding-text', {
      //         height: closedHeight,
      //       });
      //     }
      //   });
    });
  }
}

export default ExpandingText;
