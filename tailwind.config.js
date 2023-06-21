/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'tilburg1': '#009cda',
            'tilburg2': '#026596',
            'tilburg3': '#003867',
        },

        fontFamily: {
            'body': 'Pathway Gothic One, sans-serif'
        }
    },
  },
  plugins: [],
}
