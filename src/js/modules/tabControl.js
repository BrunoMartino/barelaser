const tabLinks = document.querySelectorAll(".sess6_about-tabs__nav a");
const accordions = document.querySelectorAll(".sess6__about-accordion > div");

if (tabLinks.length > 0 && accordions.length > 0) {
  function hideAllAccordions() {
    accordions.forEach((accordion) => {
      accordion.classList.add("hidden");
    });
  }
  hideAllAccordions();
  accordions[0].classList.remove("hidden");
  accordions[0].classList.add("block");
  tabLinks[0].classList.add("active");

  tabLinks.forEach((tabLink) => {
    tabLink.addEventListener("click", (event) => {
      event.preventDefault();

      hideAllAccordions();

      tabLinks.forEach((link) => link.classList.remove("active"));
      tabLink.classList.add("active");

      const targetAccordion = document.querySelector(
        tabLink.getAttribute("href")
      );
      if (targetAccordion) {
        targetAccordion.classList.remove("hidden");
        targetAccordion.classList.add("block");
      }
    });
  });
}
