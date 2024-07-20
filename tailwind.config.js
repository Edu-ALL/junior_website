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
          primaryBg: "#f4f4ff",
          secondary: "#F4F3FF",
          gray: "#545454",
          purple: "#E062E2",
          purpleBg: "#fff5ff",
          red: "#FE1F62",
          redBg: "#fff5f8",
          yellow: "#FF9600",
          yellowLight: '#FFF4C3',
          green: "#31C28E",
          greenBg: "#f5fffb",
          pink: "#F66C6C",
          pinkBg: "#fff9f9",
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

