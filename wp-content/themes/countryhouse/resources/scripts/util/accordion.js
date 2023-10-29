import $ from 'jquery';
import { gsap } from 'gsap';
class Accordion {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    $('.accordion-row').each(function (index) {
      let $this = $(this);

      let $accordionHeader = $('.accordion-header', $this);
      let $accordionBody = $('.accordion-body', $this);

      let textOpen = false;

      $accordionHeader.click(function () {
        if (textOpen) {
          textOpen = false;
          gsap.set($accordionBody, { height: 'auto' });
          gsap.to($accordionBody, {
            height: 0,
            ease: 'sine.inOut',
            duration: 0.4,
          });
          $accordionHeader.addClass('closed');
          $accordionHeader.removeClass('open');
        } else {
          textOpen = true;
          gsap.set($accordionBody, { height: 'auto', opacity: 1 });
          gsap.from($accordionBody, {
            height: 0,
            ease: 'sine.inOut',
            duration: 0.2,
          });
          $accordionHeader.addClass('open');
          $accordionHeader.removeClass('closed');
        }
      });
    });
  }
}

export default Accordion;
