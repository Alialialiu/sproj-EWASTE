/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js,php}", "./src/**/**/*.{html,js,php}", "./src/**/**/**/*.{html,js,php}"],
    theme: {
        extend: {},
        fontFamily: {
      "popin": [ "Poppins", "sans-serif"],
    },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: false,
        darkTheme: "light",
    },
};
