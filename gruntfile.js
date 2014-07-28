module.exports = function(grunt) {

	// Load all tasks
	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	// Configuração do projeto
	grunt.initConfig({
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
		      'public/css/style.min.css': ['dev/css/reset.css','dev/css/style.css']
		    }
		  }
		},

		copy: {
		  main: {
		    files: [
		      // includes files within path
		      {expand: false, src: ['bower_components/jquery/jquery.min.js'], dest: 'public/js/jquery.min.js', filter: 'isFile'},
		    ]
		  }
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
	});
	// registrando tarefa default
	grunt.registerTask( 'default', ['watch'] );
	grunt.registerTask( 'c', ['copy'] );
};
