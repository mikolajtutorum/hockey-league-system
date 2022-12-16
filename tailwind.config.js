module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'question-header': '#303030',
        'question-header-new': '#303030',
        'question-body': '#595959',
        'first-column': '#ffaaad',
        'second-column': '#70daf2',
        'three-column': '#17bebb',
        'message-column-first': '#FFB800',
        'message-column-second': '#FF8A00',
        'question-header-first': '#223662',
        'question-header-second': '#004F74',
        'question-body-first': '#275D76',
        'question-body-second': '#367998',
        'continue-button':'#223662'
      }
    }
  },
  plugins: [
    require('flowbite/plugin')
  ]
}
