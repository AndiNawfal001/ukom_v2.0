/** @type {import('tailwindcss').Config} */
module.exports = {
    daisyui: {
        themes: ["dark"],
    },
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
    },
    plugins: [require("daisyui")],
  }
