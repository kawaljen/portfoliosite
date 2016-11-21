module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({


    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          './css/style22.min.css': ['./css/style22.css']
        }
      }
    },
    uglify: {
      my_target: {
        files: {
          './js/funct.min.js': ['./js/formulaire.js', './js/carrousel.js']
        }
      }
    },
    sass: {
			dist: {
				files: {
					'./css/style22.css' : './css/style22.scss'
				}
			}
		},
    watch: {
      css: {
        files: './css/style22.scss',
        tasks: ['sass']
      },
    },

  });


  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('mini', [
										 'cssmin',
										 'uglify',
									   ]);

  grunt.registerTask('sass',['watch']);
};
