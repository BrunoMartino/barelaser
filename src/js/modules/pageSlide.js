import Splide from "@splidejs/splide";

/* control slides in Home Page */

const productSlide = document.getElementById("sess2__home-slide");

if (productSlide) {
  const sess2Slide = new Splide(productSlide, {
    type: "loop",
    rewind: true,
    pagination: false,
    arrows: true,
    autoplay: true,
    perPage: 4,
    gap: "32px",
    breakpoints: {
      960: {
        perPage: 2,
        pagination: true,
      },
      640: {
        perPage: 1,
        width: "450px",
      },
    },
  });
  sess2Slide.mount();
}
