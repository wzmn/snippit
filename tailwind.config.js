module.exports = {
  content: ["./src/**/*.{html,js}", "./*.php"],
  safelist: [
    'col-end-4',
    'col-start-2',
    'col-end-4',
    'col-start-6',
    'col-end-6',
    'col-start-8',
    'pl-4',
    'border-[#eaeaea]',
    'max-w-[80px]',
    'px-4',
    'py-3',
    'px-8',
    'pr-4',
    'pr-3',
    'w-12',
    'h-6',
    'hover:bg-[#32d0d1]',
    'hover:text-blue-dark',
    'border-[#d4d4d8]',
    'border-b-2',
    'border-blue',
    'leading-[5rem]',
    'text-[#33ced0]',
    'fill-[#0c1559]',
    'hover:text-blue',
  ],
  theme: {
    borderRadius: {
      'curve': '5rem'
    },
    minHeight: {
      'screen-half': '50vh',
    },
    colors: {
      'blue': '#0A84FF',
      'blue-dark': '#0C1559',
      'lime': '#97DC21',
      'yellow': '#FED000',
      'cyan': '#32D0D1',
      'black': '#000000',
      'white': '#FFFFFF',
      'footer': '#2b3a42',
      'jellyfish': '#32d0d1'
    },
    fontFamily: {
      'default': ['Poppins', 'sans-serif'],
      'light': ['Poppins', 'sans-serif'],
      'regular': ['Poppins', 'sans-serif'],
      'semibold': ['Poppins', 'sans-serif'],
      'bold': ['Poppins', 'sans-serif'],
      'body' : ['Poppins', 'sans-serif']
    },
    extend: {},
  },
  plugins: [],
}