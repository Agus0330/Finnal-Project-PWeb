/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}","./*.{html,js,php}"],
  theme: {
    container:{
      center:true,
      padding: '16px',
    },
    extend: {
      colors:{
        primary: '#14b8a6',
        secondary: '#94a3b8',
        dark: '#020617',
      }
    },
  },
  plugins: [],
}

