/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        manrope: "Manrope",
        archivo: "Archivo Black",
      },
      colors: {
        main: "#132745",
        secondary: "#32FFCE",
        bgGray: "#F9F9F9",
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};
