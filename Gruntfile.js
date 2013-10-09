module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch: {
			sass: {
				files: 'public/sass/**/*.scss',
				tasks: ['compass:dev']
			},
			neuter: {
				files: 'public/js/**/*.js',
				tasks: ['neuter']
			}
		},
		compass: {
			dev: {
				options: {
					config: 'config.rb'
				}
			},
			dist: {
				options: {
					config: 'config.rb',
					outputStyle: 'compressed'
				}
			}
		},
		neuter: {
			dev: {
				options: {
					filepathTransform: function (filepath) {
						return 'public/js/' + filepath;
					}
				},
				src: 'public/js/app/app.js',
				dest: 'public/js/global.js'
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-neuter');
	grunt.loadNpmTasks('grunt-usemin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-rev');

	grunt.registerTask('default', ['compass:dist', 'neuter:dev']);

}