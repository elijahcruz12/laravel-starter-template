import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import aspectRatio from '@tailwindcss/aspect-ratio'

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js')
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        './vendor/tallstackui/tallstackui/src/**/*.php',
    ],
    theme: {
        extend: {fontFamily: {
                'body': [
                    'Lato',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ],
                'sans': [
                    'Lato',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ]
            },
            colors: {
                'primary': {
                    '50': '#fcf4ff',
                    '100': '#f9e9fe',
                    '200': '#f2d2fc',
                    '300': '#eaaef9',
                    '400': '#df7ef4',
                    '500': '#ca45e8',
                    '600': '#b22ccd',
                    '700': '#9721aa',
                    '800': '#7c1d8b',
                    '900': '#681d72',
                    '950': '#44074b',
                },
                'secondary': {
                    '50': '#fcfaee',
                    '100': '#f5f0d0',
                    '200': '#eae09d',
                    '300': '#decc6b',
                    '400': '#d8bd4f',
                    '500': '#cda133',
                    '600': '#b57f2a',
                    '700': '#976026',
                    '800': '#7c4c24',
                    '900': '#664021',
                    '950': '#3a210e',
                },
            }
        },
    },
    plugins: [
        forms,
        typography,
        aspectRatio,
    ],
}
