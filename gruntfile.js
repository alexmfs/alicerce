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
		cssmin : {
			css:{
				src: 'dev/css/style.css',
				dest: 'public/app/webroot/css/style.min.css',
			},
		},
		// Atualizar
		watch: {
			styles: {
				// Which files to watch (all .less files recursively in the less directory)
				files: ['gruntfile.js','dev/less/*.less','dev/less/style.css'],
				tasks: ['less','cmq','cssmin'],
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