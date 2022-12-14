const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                serif: ['Prata'],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'white': '#ffffff',
                'purple': '#3f3cbb',
                'midnight': '#121063',
                'metal': '#565584',
                'tahiti': '#3ab7bf',
                'silver': '#ecebff',
                'bubble-gum': '#ff77e9',
                'bermuda': '#78dcca',
                'brown': '#76433B',
                'cream': '#F4F4F4',
                'oren': '#D79800',
                'dof': '#272729',
                'bata': '#C32325',
                'green': '#6DB15D',
                'abang': '#CB1C8D',

            },
        },
    },

    // plugins: [require('@tailwindcss/forms')],
};