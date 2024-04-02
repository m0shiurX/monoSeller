/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {},
    },
    plugins: [],
    corePlugins: {
        preflight: true,
    },
    // prefix: "tw-",
};
