import domReady from '@roots/sage/client/dom-ready';
// import QuoteCarousel from './util/quoteCarousel.js';
// import PropertyCarousel from './util/propertyCarousel.js';
// import ApproachCarousel from './util/approachCarousel.js';
import VideoPlayer from './util/videoPlayer.js';
import BurgerMenu from './util/burgerMenu.js';
// import MapSingle from './util/mapSingle.js';
// import LocationsCarousel from './util/locationsCarousel.js';
// import ValuesCarousel from './util/valuesCarousel.js';
import BlogGallery from './util/blogGallery.js';
// import SingleTestimonialCarousel from './util/singleTestimonialCarousel.js';
import ExpandingText from './util/expandingText.js';
// import LandingGallery from './util/landingGallery.js';
import BlogArchive from './util/blogArchive.js';
import PropertyArchive from './util/propertyArchive.js';
import TeamMember from './util/teamMember.js';
// import PropertyFilters from './util/propertyFilters.js';
import Accordion from './util/accordion.js';
import DownArrow from './util/downArrow.js';
// import PropertyAreaMap from './util/propertyAreaMap.js';
import ExpandingCarousel from './util/expandingCarousel.js';
import ClientsCarousel from './util/clientsCarousel.js';
import SectionCarousel from './util/sectionCarousel.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...

  console.log('app new');
  // const quoteCarousel = new QuoteCarousel();
  //const propertyCarousel = new PropertyCarousel();
  // const approachCarousel = new ApproachCarousel();
  // const locationsCarousel = new LocationsCarousel();
  //const valuesCarousel = new ValuesCarousel();
  const videoPlayer = new VideoPlayer();
  const burgerMenu = new BurgerMenu();
  //const mapSingle = new MapSingle();
  const blogGallery = new BlogGallery();
  //const singleTestimonialCarousel = new SingleTestimonialCarousel();
  const expandingText = new ExpandingText();
  //const landingGallery = new LandingGallery();
  const blogArchive = new BlogArchive();
  const propertyArchive = new PropertyArchive();
  const teamMember = new TeamMember();
  //const propertyFilters = new PropertyFilters();
  const accordion = new Accordion();
  const downArrow = new DownArrow();

  //const expandingCarousel = new ExpandingCarousel();
  const clientsCarousel = new ClientsCarousel();
  const sectionCarousel = new SectionCarousel();
  //const classFile = new ClassFile();
  // }
  //myFunction();
});

// function myFunction() {
//   //console.log('called');
//   const common = new Common();
// }

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
