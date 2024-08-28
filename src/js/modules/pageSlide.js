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
const memberPlanSlides = document.getElementById("sess2__member-plans__slides");

if (memberPlanSlides) {
  const plansSlides = new Splide(memberPlanSlides, {
    type: "loop",
    rewind: true,
    pagination: false,
    arrows: false,
    autoplay: true,
    perPage: 4,
    gap: "32px",
    breakpoints: {
      960: {
        perPage: 2,
        arrows: true,
      },
      640: {
        perPage: 1,
        width: "450px",
      },
    },
  });
  plansSlides.mount();
}

const laserAreaSlides = document.getElementById("sess3__member-laser__slides");

if (laserAreaSlides) {
  const laserSlides = new Splide(laserAreaSlides, {
    type: "loop",
    rewind: true,
    pagination: false,
    arrows: false,
    autoplay: true,
    perPage: 4,
    gap: "32px",
    breakpoints: {
      960: {
        perPage: 2,
        pagination: true,
        arrows: true,
      },
      640: {
        perPage: 1,
        width: "450px",
      },
    },
  });
  laserSlides.mount();
}
const memberBenefitsSlide = document.getElementById(
  "sess5__member-benefits__slides"
);

if (memberBenefitsSlide) {
  const benefitSlide = new Splide(memberBenefitsSlide, {
    type: "loop",
    rewind: true,
    pagination: false,
    arrows: false,
    autoplay: true,
    perPage: 4,
    gap: "32px",
    breakpoints: {
      1023: {
        perPage: 2,
        pagination: true,
        arrows: true,
      },
      640: {
        perPage: 1,
        width: "450px",
      },
    },
  });
  benefitSlide.mount();
}
