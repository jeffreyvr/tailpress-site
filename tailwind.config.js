module.exports = {
  mode: 'jit',
  purge: [
    './helpers.php',
    './public/*.php',
    './resources/**/*.php'
  ],
  plugins: [require('@tailwindcss/aspect-ratio')],
  darkMode: false, // or 'media' or 'class'
  theme: {
    container: {
      padding: '2rem',
    },
    extend: {
      colors: {
        "primary": "#0EA5E9",
        "secondary": "#14B8A6"
      }
    },
  },
  variants: {
    extend: {},
  }
}
