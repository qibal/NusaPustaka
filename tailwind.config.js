/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/admin/**/*.blade.php",
    "./resources/views/user/**/*.blade.php",
    "./resources/views/admin/**/*.js",
    "./resources/views/user/**/*.js",
    "./resources/views/admin/**/*.vue",
    "./resources/views/user/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

