// Local modules
import { mobileMenu } from '../lib/common';

// 3rd-party modules
import Swiper from 'swiper';
import { Autoplay, Navigation } from 'swiper/modules';
import GLightbox from 'glightbox';
import Popover from 'bootstrap/js/dist/popover';


mobileMenu();

const testimonialsSwiper = document.querySelector(
  '.testimonials-swiper'
);
const mapRings = document.querySelectorAll(".map .ring");
const langElem = document.querySelector(".lang");
const langElemText = langElem.querySelector("span");
let isLangEn = true;
const mapContainer = document.querySelector(".world");
const mapText = mapContainer.querySelector(".text_area")

GLightbox({
  plyr: {
    ratio: '16/9',
    muted: false,
  },
});

new Swiper(testimonialsSwiper, {
  modules: [Autoplay, Navigation],
  centeredSlides: true,
  speed: 400,
  initialSlide: 1,
  spaceBetween: 24,
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1.2,
    },
    768: {
      slidesPerView: 2.4,
    },
    1024: {
      slidesPerView: 4,
      initialSlide: 2,
    },
  },
  autoplay: {
    delay: 3000,
    pauseOnMouseEnter: true,
  },
  navigation: {
    nextEl: ".testimonials_nav .right",
    prevEl: ".testimonials_nav .left"
  }
});


mapRings.forEach((ring) => {
  new Popover(ring, {
    placement: "top",
    trigger: "hover",
    html: true,
    title: function(){
      let img = new Image();
      img.src = ring.dataset.img;
      return img;
    }
  });
});

langElem.addEventListener("click", function() {
  isLangEn = !isLangEn;
  langElemText.innerText = isLangEn ? "EN" : "TR";
});


// Keep text at the center of div
mapContainer.addEventListener("scroll", function(){
  let leftOffset = mapContainer.scrollLeft;
  mapText.style.transform = `translateX(${leftOffset}px)`
})