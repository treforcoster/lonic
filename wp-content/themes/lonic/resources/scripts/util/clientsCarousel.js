import $ from 'jquery';
import { gsap } from 'gsap';
//import { Timeline } from 'gsap/gsap-core';
// import { ScrollTrigger } from 'gsap/ScrollTrigger.js';
import imagesLoaded from '../../../scripts/imagesloaded.pkgd.js';

class ClientsCarousel {
  constructor() {
    let imageWidth = window.innerWidth / 5;
    let images = $('.animated-content-left .image').length;
    let rowWidth = images * imageWidth;

    

    let $logos = $('.section-clients-carousel')
    $logos.imagesLoaded()
        .always(function (instance) {
          console.log('all images loaded');
        })
        .done(function (instance) {
          console.log('all images successfully loaded');
          carouselInit();
        })
        .fail(function () {
          console.log('all images loaded, at least one is broken');
        })
        .progress(function (instance, image) {
          var result = image.isLoaded ? 'loaded' : 'broken';
          console.log('image is ' + result + ' for ' + image.img.src);
        });

   

    function carouselInit() {

      console.log('carouselInit')

     
      gsap.set('.animated-content-left .image', {
        x: (i) => i * imageWidth,
        width: imageWidth,
      });
  
      let height = $('.animated-content-left .image').height();
  
      gsap.set('.animated-content-left', {
        height: height,
      });
  
      gsap.set('.animated-banner-left', {
        height: height,
      });
  
      $('.animated-banner-left .animated-content-left')
        .clone()
        .appendTo('.animated-banner-left');
  
      gsap.set('.animated-banner-left .animated-content-left', {
        x: (i) => i * rowWidth,
        width: rowWidth,
        y: (i) => -1 * (i * height),
      });
  
      let distanceLeft = -1 * rowWidth;
      let time = images * 3;
  
      gsap.fromTo(
        '.animated-banner-left',
        { x: 0 },
        { x: distanceLeft, ease: 'none', duration: time, repeat: -1 }
      );
  
      ///////////////////////////////
      let imageWidthR = window.innerWidth / 5;
      let imagesR = $('.animated-content-right .image').length;
      let rowWidthR = imagesR * imageWidthR;
  
      gsap.set('.animated-content-right .image', {
        x: (i) => i * imageWidthR,
        width: imageWidthR,
      });
  
      gsap.set('.animated-content-right', {
        height: height,
      });
  
      gsap.set('.animated-banner-right', {
        height: height,
      });
  
      $('.animated-banner-right .animated-content-right')
        .clone()
        .appendTo('.animated-banner-right');
  
      gsap.set('.animated-banner-right .animated-content-right', {
        x: (i) => i * rowWidthR,
        width: rowWidthR,
        y: (i) => -1 * (i * height),
      });
  
      let distance = -1 * rowWidth;
  
      let bottomTL = gsap.timeline({repeat: -1});
  
      bottomTL.fromTo(
        '.animated-banner-right',
        { x: distance },
        { x: 0, ease: 'none', duration: time }
      );
  
      bottomTL.seek(time/2);

      window.addEventListener('resize', resize);

      
    }

    function resize() {

      gsap.killTweensOf(myObject, "opacity,x");
      carouselInit()
    }
  }
}

export default ClientsCarousel;
