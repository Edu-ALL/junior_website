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
          purple: "#6C6CF6",
          red: "#FE1F62",
          yellow: "#FF9600",
          yellowLight: '#E3CD7B',
          green: "#4CC1A0",
          dark: "#0D0D0D",
          blue: "#504FDC",
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

