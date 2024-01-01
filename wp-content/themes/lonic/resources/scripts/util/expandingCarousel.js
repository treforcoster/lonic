import $ from 'jquery';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';

class ExpandingCarousel {
  doAThing() {
    console.log('animations Do a thing');
  }

  constructor() {
    $('.section-expanding-carousel').each(function (index) {
      gsap.registerPlugin(ScrollTrigger);

      let duration = 1.5;
      let spacing = 1.5;
      let ease = 'sine.inOut';

      gsap.set('#s1', { width: '72%' });
      gsap.set('#s2', { width: '8%' });
      gsap.set('#s3', { width: '8%' });
      gsap.set('#s4', { width: '8%' });
      gsap.set('#s5', { width: '8%' });

      gsap.set('#s1 .slide-content', { opacity: 1 });
      gsap.set('#s2 .slide-content', { opacity: 0 });
      gsap.set('#s3 .slide-content', { opacity: 0 });
      gsap.set('#s4 .slide-content', { opacity: 0 });
      gsap.set('#s5 .slide-content', { opacity: 0 });

      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: '.section-expanding-carousel',
          scrub: 1,
          pin: '#main',
          // anticipatePin:1,
          markers: true,
          // start: "center bottom",
          // end: "+=300%"
          scrub: true,
          start: 'center center',
          end: '+=400%',
        },
      });
      tl.to('#s1', { width: '8%', duration: duration, ease: ease }, 0)
        .to('#s2', { width: '72%', duration: duration, ease: ease }, 0)
        .to('#s3', { width: '8%', duration: duration, ease: ease }, 0)
        .to('#s4', { width: '8%', duration: duration, ease: ease }, 0)
        .to('#s5', { width: '8%', duration: duration, ease: ease }, 0)

        .to(
          '#s1 .slide-content',
          { opacity: 0, duration: duration, ease: ease },
          0
        )
        .to(
          '#s2 .slide-content',
          { opacity: 1, duration: duration, ease: ease },
          0
        )

        .to('#s1', { width: '8%', duration: duration, ease: ease }, spacing)
        .to('#s2', { width: '8%', duration: duration, ease: ease }, spacing)
        .to('#s3', { width: '72%', duration: duration, ease: ease }, spacing)
        .to('#s4', { width: '8%', duration: duration, ease: ease }, spacing)
        .to('#s5', { width: '8%', duration: duration, ease: ease }, spacing)

        .to(
          '#s2 .slide-content',
          { opacity: 0, duration: duration, ease: ease },
          spacing
        )
        .to(
          '#s3 .slide-content',
          { opacity: 1, duration: duration, ease: ease },
          spacing
        )

        .to('#s1', { width: '8%', duration: duration, ease: ease }, spacing * 2)
        .to('#s2', { width: '8%', duration: duration, ease: ease }, spacing * 2)
        .to('#s3', { width: '8%', duration: duration, ease: ease }, spacing * 2)
        .to(
          '#s4',
          { width: '72%', duration: duration, ease: ease },
          spacing * 2
        )
        .to('#s5', { width: '8%', duration: duration, ease: ease }, spacing * 2)

        .to(
          '#s3 .slide-content',
          { opacity: 0, duration: duration, ease: ease },
          spacing * 2
        )
        .to(
          '#s4 .slide-content',
          { opacity: 1, duration: duration, ease: ease },
          spacing * 2
        )

        .to('#s1', { width: '8%', duration: duration, ease: ease }, spacing * 3)
        .to('#s2', { width: '8%', duration: duration, ease: ease }, spacing * 3)
        .to('#s3', { width: '8%', duration: duration, ease: ease }, spacing * 3)
        .to('#s4', { width: '8%', duration: duration, ease: ease }, spacing * 3)
        .to(
          '#s5',
          { width: '72%', duration: duration, ease: ease },
          spacing * 3
        )

        .to(
          '#s4 .slide-content',
          { opacity: 0, duration: duration, ease: ease },
          spacing * 3
        )
        .to(
          '#s5 .slide-content',
          { opacity: 1, duration: duration, ease: ease },
          spacing * 3
        );

      //   // tl.to('#someThing', { x: 300, duration: 0.5 });
    });
  }
}

export default ExpandingCarousel;
