/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#312414",
                secondary: "#f3b664",
            },
            fontFamily: {
                sans: ["Plus Jakarta Sans", "sans-serif"],
                garamond: ["EB Garamond", "serif"],
            },

        },
    },
    plugins: [],
}
