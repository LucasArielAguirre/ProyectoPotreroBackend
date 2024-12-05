/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",              
    "./**/*.php",          
    "./public/**/*.php",   
    "./assets/**/*.js",
    "./node_modules/flowbite/**/*.js", 
  ],
  theme: {
    extend: {
      backgroundImage: {
        'header': "url('/public/img/bg.jpg')",
      }
    },
  },
  plugins: [ 
    require('flowbite/plugin')
  
  ]
}

