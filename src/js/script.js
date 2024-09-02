import "./modules/pageSlide.js";
import "./modules/parallaxSection.js";
import "./modules/multilevelMenu.js";
import "./modules/tabControl.js";
import AnimaScroll from "./modules/animaScroll.js";

import "flowbite";

const animaScroll = new AnimaScroll('[data-anima="scroll"]');

animaScroll.init();

/* creates smooth scroll*/
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const target = document.querySelector(this.getAttribute("href"));
    const offset = 160;
    const bodyRect = document.body.getBoundingClientRect().top;
    const elementRect = target.getBoundingClientRect().top;
    const elementPosition = elementRect - bodyRect;
    const offsetPosition = elementPosition - offset;

    window.scrollTo({
      top: offsetPosition,
      behavior: "smooth",
    });
  });
});
