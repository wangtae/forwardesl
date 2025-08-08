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
        'forward-orange': '#FF8041',
        'forward-orange-light': '#FAA63F',
        'forward-navy': '#0D2C48',
        'forward-dark': '#353535',
        'forward-gray': '#F8F8F8',
        'forward-light-gray': '#F5F5F5',
        'forward-yellow': '#F4BF3A',
      },
      fontFamily: {
        'sans': ['Roboto', 'sans-serif'],
        'serif': ['Hedvig Letters Serif', 'serif'],
        'display': ['Aboreto', 'sans-serif'],
      },
      animation: {
        'fade-in': 'fadeIn 0.5s ease-in-out',
        'slide-up': 'slideUp 0.5s ease-out',
        'slide-down': 'slideDown 0.3s ease-out',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { transform: 'translateY(20px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        slideDown: {
          '0%': { transform: 'translateY(-10px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}