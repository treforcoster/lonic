import videojs from 'video.js/dist/video.js';
import $ from 'jquery';
import { gsap } from 'gsap';

class VideoPlayer {
  constructor() {
    console.log('----------- VideoPlayer');

    let videoCount = 0;

    // gsap.set('.bg-video-wrapper', { opacity: 0 });

    $('.bg-video-wrapper').each(function () {
      //let $id = $('video', this).attr('id');
      let videoID = 'video-' + videoCount;

      $('video', this).attr('id', videoID);

      let player = videojs(videoID, {
        autoplay: true,
        preload: 'auto',
      });

      function delayPlay() {
        //console.log('id ---------- ', videoID, ' play')

        player.play();
        gsap.set('.header-background', {
          opacity: 0,
          duration: 0.5,
          delay: 0.25,
        });
      }

      setTimeout(delayPlay, 250);

      player.ready(function () {
        player.play();
      });

      player.on('ended', function () {
        player.play();
      });

      videoCount++;
    });
  }
}

export default VideoPlayer;
