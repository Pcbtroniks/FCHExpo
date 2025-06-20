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
        "main": "#ff7245",
        "main-altern": "#839226",
        "acent": "#fd5722",
        "secondary": "#DC9A46",
        "main-light": "#f5f5f5",
        "secondary-light": "#F6F9FB",
        "dark-text": "#747474",
        "dark": "#222425",
        "dark-medium": "#414141",
        "main-dark": "#212529",
        "gray": "#A1A1A1",
        "salmon": "#D75C73",
        "aqua": "#1E9A8D",
        "blue": "#089ABE",
        "hielow": "#F5C55B",
      },
    },
  },
  plugins: [],
}
