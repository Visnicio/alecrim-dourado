/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'white': '#ffffff',
        'black': '#000',
        'orange': {
            '50': '#FFF3E0',
            '100': '#FFF7E5',
            '200': '#FFF0CC',
            '300': '#FFE8B2',
            '400': '#FFE099',
            '500': '#FFD880',
            '600': '#FFD166',
            '700': '#FFC94D',
            '800': '#FFC133',
            '900': '#FFBA1A',
        },
        'red': {
            '50': '#FFF3E0',
            '100': '#FFE7E5',
            '200': '#FFCFCC',
            '300': '#FFB7B2',
            '400': '#FF9F99',
            '500': '#FF8780',
            '600': '#FF6F66',
            '700': '#FF574D',
            '800': '#FF3F33',
            '900': '#FF271A',
        },
        'gray':{
            '50': '#F7F9FC',
            '100': '#EDF2F7',
            '200': '#A3A3A3',
            '300': '#8F8F8F',
            '400': '#7A7A7A',
            '500': '#666666',
            '600': '#525252',
            '700': '#3D3D3D',
            '800': '#292929',
            '900': '#151515',
        }
    }
  },
  plugins: [],
}
