/*controls sub-menus on header*/

const menuHasSubmenu = document.querySelectorAll(".menu-item-has-children > a");
menuHasSubmenu.forEach((link) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();

    const subMenu = link.nextElementSibling;

    if (subMenu.classList.contains("show__submenu")) {
      subMenu.classList.remove("show__submenu");
    } else {
      subMenu.classList.add("show__submenu");
    }
  });
});

const aboutMenuItem = document.querySelector(
  "#menu-header-menu-zion > li:nth-child(2)"
);
const servicesMenuItem = document.querySelector(
  "#menu-header-menu-zion > li:nth-child(3)"
);

function toggleSubmenu(event) {
  const targetSubmenu = event.target.nextElementSibling;

  if (
    targetSubmenu !== aboutMenuItem.children[1] &&
    aboutMenuItem.children[1].classList.contains("show__submenu")
  ) {
    aboutMenuItem.children[1].classList.remove("show__submenu");
  } else if (
    targetSubmenu === aboutMenuItem.children[1] &&
    servicesMenuItem.children[1].classList.contains("show__submenu")
  ) {
    servicesMenuItem.children[1].classList.remove("show__submenu");
    console.log(servicesMenuItem.children[1].children);
  }
}
aboutMenuItem.addEventListener("click", toggleSubmenu);
servicesMenuItem.addEventListener("click", toggleSubmenu);
