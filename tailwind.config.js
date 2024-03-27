/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        Poppins: ['Poppins','sans-serif']
      },
      backgroundImage: {
        'body-bg': "url('../images/image.jpg')"
      }
    },
  },
  plugins: [],
}

