module.exports = {
    important: true,
    prefix: 'tw-',
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                'gray-lighter': '#e3e3e3',
                'brown-lighter': '#d6ba8d',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
