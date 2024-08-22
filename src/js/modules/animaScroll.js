import debounce from "./debounce.js";

export default class AnimaScroll {
  constructor(sections) {
    this.sections = document.querySelectorAll(sections);

    this.windowEight = window.innerHeight * 0.85;

    this.checkDistance = debounce(this.checkDistance.bind(this), 50);
  }

  getDistance() {
    this.distance = [...this.sections].map((section) => {
      const rect = section.getBoundingClientRect();
      const offset = rect.top + window.scrollY;
      return {
        element: section,
        offset: Math.floor(offset - this.windowEight),
      };
    });
  }

  checkDistance() {
    this.distance.forEach((item) => {
      if (window.scrollY > item.offset) {
        item.element.classList.add("onShow");
      }
    });
  }

  init() {
    if (this.sections.length) {
      this.getDistance();

      this.checkDistance();

      window.addEventListener("scroll", this.checkDistance);
    }

    return this;
  }
}
