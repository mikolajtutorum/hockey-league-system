module.exports = {
    parser: 'postcss-scss',
    syntax: 'postcss-scss',
    plugins: [
        require('postcss-import'),
        require('tailwindcss/nesting'),
        require('tailwindcss'),
        require('autoprefixer')
    ]
}
