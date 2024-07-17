/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        backgroundImage: {
          banner: "url('/public/assets/images/decor/background.webp')",
          "background-form": "url('/public/assets/images/get-in-touch/background.webp')",
        },
        colors: {
          primary: "#0004F6",
          secondary: "#F4F3FF",
          gray: "#545454",
          purple: "#E062E2",
          purpleBg: "#fff5ff",
          red: "#FE1F62",
          yellow: "#FF9600",
          yellowLight: '#FFF4C3',
          green: "#4CC1A0",
          dark: "#2C2C2C",
          blue: "#504FDC",
          orange: "#FE9601",
          orangeLight: "#FFC9A4",
          orangeBg: "#FFF6EA",
        },
        fontFamily: {
          primary: ["NeverMindRounded", "Wix Madefor Display", "sans-serif"],
        },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

