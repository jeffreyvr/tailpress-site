module.exports = {
  content: [
    './src/helpers.php',
    './public/index.php',
    './resources/**/*.php'
  ],
  plugins: [require('@tailwindcss/aspect-ratio')],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'sans': ['Inter', 'ui-sans-serif', 'system-ui'],
      'mono': ['ui-monospace', 'SFMono-Regular', 'Menlo', 'monospace']
    },
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
