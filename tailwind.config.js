/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class', // must be 'class'
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
