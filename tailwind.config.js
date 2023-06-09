/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        screens: {
          'xs': {'min': '0px', 'max': '639px'},
        },
        colors:{
          'secondary':"#00235B",
          'primary-gray':"#F2F3F6"
        },
        borderRadius:{
          'large': '48px',
        }
    },
  },
  plugins: [],
}

