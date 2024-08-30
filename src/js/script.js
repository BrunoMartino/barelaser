import "./modules/pageSlide.js";
import "./modules/parallaxSection.js";
import "./modules/multilevelMenu.js";
import "./modules/tabControl.js";
import AnimaScroll from "./modules/animaScroll.js";

import "flowbite";

const animaScroll = new AnimaScroll('[data-anima="scroll"]');

animaScroll.init();
