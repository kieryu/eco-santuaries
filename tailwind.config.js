/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        blackgray: '#41423D',
      },
      fontFamily: {
        'celiasBold': ['CeliasBold', 'sans-serif'],
        'celiasMedium': ['CeliasMedium', 'sans-serif'],
        'cormorantMedium': ['CormorantMedium', 'sans-serif'],
        'robotoRegular': ['RobotoRegular', 'sans-serif'],
        'montserratMedium': ['MontserratMedium', 'sans-serif'],
        'montserratSemiBold': ['MontserratSemiBold', 'sans-serif'],
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}
