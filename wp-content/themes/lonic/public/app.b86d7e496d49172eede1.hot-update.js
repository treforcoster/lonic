"use strict";
self["webpackHotUpdate_roots_bud_sage_sage"]("app",{

/***/ "./scripts/util/expandingCarousel.js":
/*!*******************************************!*\
  !*** ./scripts/util/expandingCarousel.js ***!
  \*******************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! gsap */ "../node_modules/gsap/index.js");
/* harmony import */ var gsap_ScrollTrigger_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! gsap/ScrollTrigger.js */ "../node_modules/gsap/ScrollTrigger.js");



class ExpandingCarousel {
  doAThing() {
    console.log('animations Do a thing');
  }
  constructor() {
    jquery__WEBPACK_IMPORTED_MODULE_0__('.section-expanding-carousel').each(function (index) {
      gsap__WEBPACK_IMPORTED_MODULE_1__.gsap.registerPlugin(gsap_ScrollTrigger_js__WEBPACK_IMPORTED_MODULE_2__.ScrollTrigger);
      let duration = 1.5;
      let spacing = 1.5;
      let ease = 'sine.inOut';
      gsap__WEBPACK_IMPORTED_MODULE_1__.gsap.set('#s1', {
        width: '72%'
      });
      gsap__WEBPACK_IMPORTED_MODULE_1__.gsap.set('#s2', {
        width: '8%'
      });
      gsap__WEBPACK_IMPORTED_MODULE_1__.gsap.set('#s3', {
        width: '8%'
      });
      gsap__WEBPACK_IMPORTED_MODULE_1__.gsap.set('#s4', {
        width: '8%'
      });
      gsap__WEBPACK_IMPORTED_MODULE_1__.gsap.set('#s5', {
        width: '8%'
      });
      let tl1 = gsap__WEBPACK_IMPORTED_MODULE_1__.gsap.timeline({
        scrollTrigger: {
          trigger: '.section-expanding-carousel',
          scrub: 1,
          pin: true,
          scrub: true,
          start: 'center center',
          end: '+=500%'
        }
      });
      tl2.set('#content', {}, 0);
      let tl = gsap__WEBPACK_IMPORTED_MODULE_1__.gsap.timeline({
        scrollTrigger: {
          trigger: '.section-expanding-carousel',
          scrub: 1,
          pin: true,
          // anticipatePin:1,
          // markers: true,
          // start: "center bottom",
          // end: "+=300%"
          scrub: true,
          start: 'center center',
          end: '+=500%'
        }
      });
      tl.to('#s1', {
        width: '8%',
        duration: duration,
        ease: ease
      }, 0).to('#s2', {
        width: '72%',
        duration: duration,
        ease: ease
      }, 0).to('#s3', {
        width: '8%',
        duration: duration,
        ease: ease
      }, 0).to('#s4', {
        width: '8%',
        duration: duration,
        ease: ease
      }, 0).to('#s5', {
        width: '8%',
        duration: duration,
        ease: ease
      }, 0).to('#s1', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing).to('#s2', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing).to('#s3', {
        width: '72%',
        duration: duration,
        ease: ease
      }, spacing).to('#s4', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing).to('#s5', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing).to('#s1', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing * 2).to('#s2', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing * 2).to('#s3', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing * 2).to('#s4', {
        width: '72%',
        duration: duration,
        ease: ease
      }, spacing * 2).to('#s5', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing * 2).to('#s1', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing * 3).to('#s2', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing * 3).to('#s3', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing * 3).to('#s4', {
        width: '8%',
        duration: duration,
        ease: ease
      }, spacing * 3).to('#s5', {
        width: '72%',
        duration: duration,
        ease: ease
      }, spacing * 3);
      tl.to('#someThing', {
        x: 300,
        duration: 1
      });
    });
  }
}
/* harmony default export */ __webpack_exports__["default"] = (ExpandingCarousel);

/***/ })

});
//# sourceMappingURL=app.b86d7e496d49172eede1.hot-update.js.map