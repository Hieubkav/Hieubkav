/** @type {import('tailwindcss').Config} */
import preset from './vendor/filament/support/tailwind.config.preset'
export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                'desktop': 'repeat(3, minmax(0, 1fr))',
                'tablet': 'repeat(2, minmax(0, 1fr))',
            }
        },
    },
    plugins: [
        require('preline/plugin'),
    ],
    darkMode: 'class',
}

