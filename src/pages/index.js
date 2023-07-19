import { mobileMenu } from '../lib/common';
import Swiper from "swiper";
import {Autoplay, Navigation} from "swiper/modules";
import GLightbox from "glightbox";

mobileMenu();

const testimonialsSwiper = document.querySelector(".testimonials-swiper");


GLightbox({
  plyr:{
    ratio: '16/9',
    muted: false,
  }
});

new Swiper(testimonialsSwiper, {
  modules: [Autoplay, Navigation],
  centeredSlides: true,
  speed: 400,
  initialSlide: 1,
  spaceBetween: 24,
  breakpoints: {
    0: {
      slidesPerView: 1.2,
    },
    768: {
      slidesPerView: 2.4
    },
    1024: {
      slidesPerView: 3.5
    }
  },
  autoplay: {
    delay: 3000,
    pauseOnMouseEnter: true
  }
})