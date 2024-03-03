tailwind.config = {
    theme: {
        fontSize: {
            sm: ['14px', '20px'],
            base: ['16px', '24px'],
            lg: ['20px', '28px'],
            xl: ['24px', '32px'],
        },
        extend: {
            colors: {
                cyan: '#4BC1DB',
                'gray-custom': '#cecece',
                'gray-dark': '#232323',
                'light-black': "#1E1F25",
                'dark-black': '#0C0C16',
                'white': '#ffffff',
                'dark': '#2A2B31',
                'gray': '#4c4c4c',
                'gray-light': '#B7B7BA',
                'light-white': '#f1f1f1',
                'gray-dark': "#d1d1d1",
                'border-light': '#919AA366',
                'color-green': '#33B869',
                'color-gray': '#C6C6C6'
            },
        },
        fontFamily: {
            'raleway': ['Raleway', 'sans-serif'],
        },
        backgroundImage: {
            'main': "url('./images/web/bg.png')",
            'wave1': "url('./images/web/wave.svg')",
            'black-bg': "url('./images/web/bg-black.png')",
            'gray-bg': "url('./images/web/bg-gray.png')",
        },
    }
}