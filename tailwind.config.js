/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,js,php}",
    "./node_modules/flowbite/**/*.js",
    "./node_modules/@splidejs/splide/dist/css/splide.min.css",
    "./src/css/fonts.css",
  ],
  theme: {
    extend: {
      fontFamily: {
        zapf: ['"ZapfHumnst"', "sans-serif"],
        zapfDm: ['"ZapfHumnst-Dm-BT"', "sans-serif"],
        zapfUlt: ['"ZapfHumnst-Ult-BT"', "sans-serif"],
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
