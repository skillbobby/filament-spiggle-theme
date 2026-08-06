import preset from './vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './src/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Outfit', 'sans-serif'],
            },
            colors: {
                brand: {
                    50: '#EEF2FF',
                    100: '#E0EAFF',
                    200: '#C7D7FE',
                    300: '#A4BCFD',
                    400: '#7A96FC',
                    500: '#465FFF', // TailAdmin Primary Blue
                    600: '#3544E5',
                    700: '#2A34B8',
                    800: '#262D93',
                    900: '#242B74',
                },
                surface: {
                    bg: '#F3F4F6',
                    card: '#FFFFFF',
                    sidebar: '#FFFFFF',
                }
            },
            borderRadius: {
                '2xl': '1rem',
                '3xl': '1.5rem',
            }
        },
    },
}