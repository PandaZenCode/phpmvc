/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}", "./app/**/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
      padding: "25px",
    },
    extend: {
      fontFamily: {
        Rubik: ["Rubik"],
        Arvo: ["Arvo", "serif"],
      },
      colors: {
        primary: "#7D5A50",
        secondary: "#798777",
        light: "#A2B29F",
        dark: "#594545",
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
};
