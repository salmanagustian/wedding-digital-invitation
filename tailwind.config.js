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
            fontSize: {
                '1xl': ['1.35rem', '1.75rem'],
            },
            colors: {
                'gray-lighter': '#e3e3e3',
                'brown-lighter': '#d6ba8d',
                'brown-dark': '#8b6626',
            }
        },
    },
    variants: {
        opacity: ({
            after
        }) => after(['disabled']),
        extend: {},
    },
    plugins: [],
}
