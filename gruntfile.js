module.exports = function(grunt) {

	// Load all tasks
	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	// Configuração do projeto
	grunt.initConfig({
		dirs: {
			folder: 'public/app/webroot/'
			// folder: 'public/'
		},

		// Compile Less
		less: {
			'dev/css/style.css': ['dev/less/__style.less']
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
					'<%= dirs.folder %>css/style.min.css': ['dev/css/reset.css','dev/css/style.css']
				}
			}
		},

		// Js files
		concat: {
			basic: {
				src: [
					'bower_components/modernizr/modernizr.js',
					'bower_components/jquery/jquery.min.js',
					'bower_components/jquery/jquery-migrate.min.js',

				],
				dest: '<%= dirs.folder %>js/vendors.js',
			},
			extras: {
				src: [
					'dev/js/_intro.js',
					'dev/js/sliderVertical.js',
					'dev/js/slideshow.js',
					'dev/js/gallery.js',
					'dev/js/inputmasks.js',
					'dev/js/forms.js',
					'dev/js/navmobile.js',
					'dev/js/ancoras.js',
					'dev/js/goto.js',
					'dev/js/modal.js',
					'dev/js/maps.config.js',
					'dev/js/_final.js',
					'dev/js/maps.api.js'
				],
				dest: '<%= dirs.folder %>js/scripts.js',
			},
		},

		// Atualizar
		watch: {
			styles: {
				// Which files to watch (all .less files recursively in the less directory)
				files: ['gruntfile.js','dev/less/*.less','dev/less/*/*.less','dev/less/style.css','dev/js/*.js'],
				tasks: ['less','cmq','cssmin','concat'],
				options: {
					nospawn: true
				}
			}
		},
	});
	// registrando tarefa default
	grunt.registerTask( 'default', ['watch'] );
	grunt.registerTask( 'initial', ['less','cmq','cssmin','concat'] );
};
