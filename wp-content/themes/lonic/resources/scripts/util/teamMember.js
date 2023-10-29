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
        gsap.to($bio, { opacity: 1 });
        gsap.set($close, { visibility: 'visible' });
        gsap.to($close, { opacity: 1 });
      });

      $close.click(function () {
        gsap.set($more, { visibility: 'visible' });
        gsap.to($more, { opacity: 1 });
        gsap.to($bio, { opacity: 0 });
        gsap.to($close, { opacity: 0, onComplete: setCloseHidden });
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
