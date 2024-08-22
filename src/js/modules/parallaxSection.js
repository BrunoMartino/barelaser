import SimpleParallax from "simple-parallax-js/vanilla";

document.addEventListener("DOMContentLoaded", function () {
  const image = document.getElementsByClassName("sess7__home-parallax");
  if (image) {
    new SimpleParallax(image, {
      orientation: "down",
      scale: 1.5,
    });
  }
});
