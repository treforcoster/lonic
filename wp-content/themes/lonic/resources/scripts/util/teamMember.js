import $ from 'jquery';
import { gsap } from 'gsap';
class TeamMember {
  constructor() {
    $('.card-team-member').each(function (index) {
      let $bio = $('.bio', this);
      let $more = $('.more-button', this);
      let $close = $('.close-button', this);

      $more.click(function () {
        gsap.to($more, { opacity: 0, onComplete: setMoreHidden });
        //gsap.to($bio, { opacity: 1 });
        gsap.to($bio, {
          duration: 0.4,
          height: "auto",
        })
        gsap.set($close, { visibility: 'visible' });
        gsap.set($close, { opacity: 1 });
      });

      $close.click(function () {
        gsap.set($more, { visibility: 'visible' });
        gsap.set($more, { opacity: 1 });
        gsap.to($bio, { height: 0 });
        gsap.set($close, { opacity: 0, onComplete: setCloseHidden });
      });

      function setMoreHidden() {
        gsap.set($more, { visibility: 'hidden' });
      }

      function setCloseHidden() {
        gsap.set($close, { visibility: 'hidden' });
      }
    });
  }
}

export default TeamMember;
