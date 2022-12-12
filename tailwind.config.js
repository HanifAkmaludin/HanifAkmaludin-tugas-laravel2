/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                "col-4": "calc(25% - 30px)",
            },
            container: {
                center: true,
            },
        },
    },
    plugins: [],
};
