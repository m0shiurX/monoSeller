/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                lg: "992px",
                // => @media (min-width: 992px) { ... }
            },
            colors: {
                primary: "#edf7f5",
                secondary: "#132322",
                accent: "#3ddc91",
                "accent-content": "#3ddc91",
                neutral: "#4a5b58",
                warning: "#ffcd48",
                danger: "#ee805a",
            },
        },

    },
    darkMode: ['selector'],
    plugins: [require("daisyui")],
    prefix: "tw-",
    daisyui: {
        themes: [
            {
                light: {
                    ...require("daisyui/src/theming/themes")["light"],
                    primary: "#edf7f5",
                    secondary: "#132322",
                    accent: "#3ddc91",
                    neutral: "#4a5b58",
                    "base-100": "#ffffff",
                },
                dark: {
                    ...require("daisyui/src/theming/themes")["dark"],
                    secondary: "#edf7f5",
                    primary: "#132322",
                    accent: "#3ddc91",
                    neutral: "#4a5b58",
                    "base-100": "#ffffff",
                },
            },
            "emerald",
            "forest",
        ],
        styled: true,
    },
};
