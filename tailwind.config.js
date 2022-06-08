const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: false,

    theme: {
        container: {
          center: true,
        },
        extend: {
            colors: {
              'stoman': '#0e2439',
                'cta': '#6364fb',
                'projects': '#1e3851',
            },
            fontFamily: {
                nunito: ['Nunito', 'sans-serif'],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
