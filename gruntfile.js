module.exports = function(grunt) {

	// Load all tasks
	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	// Configuração do projeto
	grunt.initConfig({
		// Compile Less
		less: {
			'dev/css/style.css': ['dev/less/style.less']
		},
		// Reorganize Media Queries
		cmq: {
			options: {
				log: true
			},
			dynamic: {
				expand: true,
				cwd: 'dev/css/',
				src: ['*.css'],
				dest: 'dev/css/'
			}
		},
		// Minify CSS
		cssmin: {
		  combine: {
		    files: {
		      'public/app/webroot/css/style.min.css': ['dev/css/reset.css','dev/css/style.css']
		    }
		  }
		},
		// Concatenar e Minificar Javascript
		uglify: {
			options: {
				mangle: false,
				preserveComments: "some"
			},
			dist: {
				files: {
					'public/app/webroot/js/vendor/jquery.min.js': ['dev/js/vendor/jquery-*.js'],
					'public/app/webroot/js/vendor/jquery-migrate.min.js': ['dev/js/vendor/jquery-migrate-*.js'],
					'public/app/webroot/js/vendor/modernizr.min.js': ['dev/js/vendor/modernizr-*.js'],
					'public/app/webroot/js/scripts.js': ['dev/js/*.js'],
				}
			}
		},
		// Atualizar
		watch: {
			styles: {
				// Which files to watch (all .less files recursively in the less directory)
				files: ['gruntfile.js','dev/less/*.less','dev/less/style.css'],
				tasks: ['less','cmq','cssmin','uglify'],
				options: {
					nospawn: true
				}
			}
		},
		smushit: {
			mygroup: {
				src: ['dev/img/*.png','dev/img/*.jpg'],
				dest: 'dist/img/'
			}
		}

	});
	// registrando tarefa default
	grunt.registerTask( 'default', ['watch'] );
};