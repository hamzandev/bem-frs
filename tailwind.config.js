/** @type {import('tailwindcss').Config} */

import preset from "./vendor/filament/support/tailwind.config.preset";

export default {
    presets: [preset],
    content: [
        "./app/Filament/**/*.php",
        "./resources/views/filament/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            animation: {
                "loop-scroll": "loop-scroll 30s linear infinite",
            },
            keyframes: {
                "loop-scroll": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
        },
    },
    plugins: [require("flowbite/plugin"), require('@tailwindcss/typography')],
};
