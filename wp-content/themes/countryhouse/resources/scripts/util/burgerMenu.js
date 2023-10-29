// eslint-disable-next-line no-unused-vars
import { gsap } from 'gsap';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin.js';
import $ from 'jquery';

class BurgerMenu {
  doAThing() {
    //console.log('Do a thing')
  }

  constructor() {
    gsap.registerPlugin(ScrollToPlugin);

    //let mobile = true;
    let menuOpen = false;
    let menuToggle = '#show-menu';
    let menuClose = '#close-menu';
    let menuWrapper = '.menu-wrapper';
    //let header = '.burger-menu-style';
    let header = '.burger-menu-style';

    $(menuToggle).click(function () {
      console.log('-------- main-navbar toggle click');

      if (menuOpen) {
        //console.log('close');

        $(header).removeClass('menu-open');
        $(menuWrapper).removeClass('menu-open');

        menuOpen = false;
      } else {
        //console.log('open');

        //$(menuToggle).addClass('open');
        $(header).addClass('menu-open');
        $(menuWrapper).addClass('menu-open');

        menuOpen = true;
      }
    });

    $(menuClose).click(function () {
      if (menuOpen) {
        $(header).removeClass('menu-open');
        $(menuWrapper).removeClass('menu-open');

        menuOpen = false;
      }
    });

    $('.menu-item a').on('click', function (event) {
      if ($(this).parent().hasClass('anchor')) {
        console.log('clicked');
        event.preventDefault();

        let width =
          window.innerWidth ||
          document.documentElement.clientWidth ||
          document.body.clientWidth;

        menuOpen = false;
        $(header).removeClass('menu-open');
        $(menuWrapper).removeClass('menu-open');

        event.preventDefault();

        let currentScrollPos = $(document).scrollTop();
        let intitialAddition = 0;

        if (currentScrollPos < 700) {
          console.log('less that 700');
          intitialAddition = 700 - currentScrollPos;
        }

        let target = $(this).attr('href');

        let scrollYPos = $(target).offset().top + intitialAddition - 90;

        console.log(scrollYPos);

        gsap.to(window, {
          scrollTo: { y: scrollYPos, autoKill: false },
          ease: 'sine.inOut',
          duration: 0.5,
        });
      } else {
        menuOpen = false;
        $(header).removeClass('menu-open');
        $(menuWrapper).removeClass('menu-open');
      }
    });

    // $('.anchor a').on('click', function ( event ) {
    //
    //     event.preventDefault();
    //
    //     let width = window.innerWidth
    //     || document.documentElement.clientWidth
    //     || document.body.clientWidth;
    //
    //     menuOpen = false;
    //     $(header).removeClass('menu-open');
    //     $(menuWrapper).removeClass('menu-open');
    //
    //     event.preventDefault();
    //
    //     let target = $(this).attr('href');
    //
    //     let scrollYPos = ($(target).offset().top - 70);
    //
    //     console.log(scrollYPos)
    //
    //     gsap.to(window, {scrollTo: {y: scrollYPos, autoKill:false}, ease: 'sine.inOut', duration:0.5});
    //
    // });

    $(document).scroll(function () {
      //console.log($(document).scrollTop())
    });
  }
}

export default BurgerMenu;
