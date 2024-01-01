import $ from 'jquery';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';

class ClientsCarousel {
  constructor() {
    let wrapper = $('.wrapper');
    let wrapperWidth = wrapper.width();
    let viewableBoxes = 7;
    let boxWidth = wrapperWidth / viewableBoxes;
    let targetX = boxWidth * 4;

    $(window).resize(function () {
      setInitialSizes();
    });

    setInitialSizes();

    function setInitialSizes() {
      gsap.set('#beer-info', { scaleX: 0, scaleY: 0 });
      gsap.to('.can', { scaleX: 1, scaleY: 1 });

      if (window.innerWidth < 768) {
        wrapperWidth = wrapper.width();
        viewableBoxes = 3;
        boxWidth = wrapperWidth / viewableBoxes;
        targetX = boxWidth * 2;
        selectedID = '#box-2';
      } else if (window.innerWidth < 960) {
        wrapperWidth = wrapper.width();
        viewableBoxes = 5;
        boxWidth = wrapperWidth / viewableBoxes;
        targetX = boxWidth * 3;
        selectedID = '#box-3';
      } else {
        wrapperWidth = wrapper.width();
        viewableBoxes = 7;
        boxWidth = wrapperWidth / viewableBoxes;
        targetX = boxWidth * 4;
        selectedID = '#box-4';
      }

      iniBeerSlider();
    }

    function iniBeerSlider() {
      gsap.set('.boxes', {
        x: -boxWidth,
      });

      gsap.set('.box', {
        x: (i) => i * boxWidth,
        width: boxWidth,
      });
    }
  }
}

export default ClientsCarousel;
