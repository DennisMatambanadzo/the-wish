/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
  theme: {
        screens:{
          sm:'480px',
          md:'768px',
          lg:'976px',
      },
      extend: {
          colors:{
              brightRed: 'hsl(12,88%,59%)',
              brightRedLight: 'hsl(12,88%,69%)',
              brightRedSupLight: 'hsl(12,88%,95%)',
              darkBlue: 'hsl(288,39%,23%)',
              darkGrayishBlue: 'hsl(277,12%,61%)',
              veryDarkBlue: 'hsl(233,12%,13%)',
              veryPaleRed: 'hsl(13,100%,96%)',
              veryLightGray: 'hsl(0,0%,98%)',

          },
          fontFamily:{
             cormorant: ['Cormorant Garamond']
          }
      },
  },
  plugins: [],
}

