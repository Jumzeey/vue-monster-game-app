module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    textColor: theme => theme('colors'),
     textColor: {
       'primary': '#FFDF87',
       'secondary': '#ffffff',
       'danger': '#BD0C36',
       'regular': '#AAA6A6',
     }
  },
  
  
  variants: {
    extend: {},
  },
  plugins: [],
}
