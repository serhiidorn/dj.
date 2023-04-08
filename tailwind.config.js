const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'sm': '640px', // => @media (min-width: 640px) { ... }
            'md': '768px', // => @media (min-width: 768px) { ... }
            'lg': '1070px', // => @media (min-width: 1070px) { ... }
        },
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            container: {
                padding: '15px',
                center: true
            },
            colors: {
                'theme-blue': '#0366d6'
            },
            keyframes: {
                'fadeInDown': {
                    '0%': {
                        opacity: 0,
                        transform: 'translate3d(0,-25%,0)'
                    },
                    '100%': {
                        opacity: 1,
                        transform: 'none'
                    },
                }
            },
            animation: {
                'fade-in-down-400': 'fadeInDown .5s linear .4s forwards',
                'fade-in-down-800': 'fadeInDown .5s linear .8s forwards',
                'fade-in-down-1200': 'fadeInDown .5s linear 1.2s forwards'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
