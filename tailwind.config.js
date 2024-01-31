/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#F3F8FF',
        secondary: '#092635', 
        border : '#9BB8CD'
      },
      fontFamily: {
        inter: ['Inter'],
      },
    },
  },
  plugins: [require('daisyui')],
}