module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          './css/style.min.css': ['./css/style.css']
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
					'css/style.css' : 'css/sass/style.scss'
				}
			}
		},
		watch: {
			css: {
				files: 'css/sass/*.scss',
				tasks: ['sass']
			}
		}

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

  grunt.registerTask('default',['watch']);
};
