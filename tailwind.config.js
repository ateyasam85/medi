// tailwind.config.js

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./**/*.html",
      "./**/*.php",
      "./assets/js/**/*.js"
    ],
    theme: {
      extend: {
        animation: {
          'fade-in-up': 'fadeInUp 1s ease-out forwards',
        },
        keyframes: {
          fadeInUp: {
            '0%': { opacity: '0', transform: 'translateY(20px)' },
            '100%': { opacity: '1', transform: 'translateY(0)' },
          }
        }
      },
    },
    plugins: [],
  }
  