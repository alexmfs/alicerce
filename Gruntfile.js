module.exports = function(grunt) {

    // Load all tasks
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    // Configuração do projeto
    grunt.initConfig({
        dirs: {
            dev: 'sass/',
            output: 'example/assets/',

            js: {
                bosons: 'ui/_bosons/',
                atoms: 'ui/atoms/',
                molecules: 'ui/molecules/',
                organisms: 'ui/organisms/',
                templates: 'ui/templates/',
                pages: 'ui/pages/',
            }
        },

        less: {
            // options: {
            //   sourceMap: true,
            //   outputSourceFiles: true,
            //   sourceMapURL: 'css/style.css.map',
            //   sourceMapFilename: '<%= dirs.output %>css/style.css.map',
            // },
            '<%= dirs.output %>styles.css': ['<%= dirs.dev %>styles.less'],
        },

        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                      '<%= dirs.output %>styles.css': ['<%= dirs.dev %>styles.scss'],
                }
            }
        },

        // Reorganize Media Queries
        cmq: {
            options: {
                log: true
            },
            dynamic: {
                expand: true,
                cwd: '<%= dirs.output %>styles.css',
                src: ['*.css'],
                dest: '<%= dirs.output %>styles.css'
            }
        },

        postcss: {

          options: {
            map: {
              inline: false,
              annotation: '<%= dirs.output %>'
            },
            processors: [
                require('pixrem')(),
                require('autoprefixer')(),
                require('cssnext')(),
                require('cssnano')(),
                require('postcss-font-magician')({ /* options */ }),
            ]
          },
          dist: {
            src: '<%= dirs.output %>styles.css',
            dest: '<%= dirs.output %>styles.min.css'
          }

        },

        // Js files
        concat: {
            vendors: {
                src: [
                    // 'bower_components/modernizr/modernizr.js',
                    'bower_components/jquery/dist/jquery.min.js',
                    // 'bower_components/jquery/jquery-migrate.min.js',
                    // 'assets/js/refresh.js',
                ],
                dest: '<%= dirs.dev %>vendors.js',
            }
            , scripts: {
                src: [
                    '<%= dirs.js.bosons %>_open.js',

                    // '<%= dirs.js.bosons %>file.js',
                    // '<%= dirs.js.atoms %>file.js',
                    // '<%= dirs.js.molecules %>file.js',
                    // '<%= dirs.js.organisms %>file.js',
                    // '<%= dirs.js.templates %>file.js',

                    '<%= dirs.js.atoms %>inputs.js',
                    '<%= dirs.js.atoms %>dropdown.js',
                    '<%= dirs.js.molecules %>table.js',
                    '<%= dirs.js.pages %>design-patterns.js',


                    // 'keycodes.js',
                    // 'showcode.js',
                    // 'uploadImg.js',
                    // 'progressbar.js',
                    // 'spinner.js',
                    // 'uploadImg.js',
                    // 'jscolor.min.js',
                    // 'mostraSave.js',
                    // 'slider.js',
                    // 'localStorage.js',
                    // 'notify.js',
                    // 'slideshow.js',
                    // 'gallery.js',
                    // 'inputmasks.js',
                    // 'fixedheader.js',
                    // 'fade.js',
                    // 'calculadora.js',
                    // 'forms.js',
                    // 'navmobile.js',
                    // 'ancoras.js',
                    // 'goto.js',
                    // 'modal.js',
                    // 'chamadasPlugins.js',
                    // 'maps.config.js',
                    // 'tabs.js',
                    // 'responsiveslides.min.js',
                    // 'getenderecos.js',
                    '<%= dirs.js.bosons %>_close.js',

                ],
                // dest: '<%= dirs.dev %>js/scripts.js',
                dest: '<%= dirs.output %>scripts.js',
            }
            // , maps: {
            //   src:[
            //     '<%= dirs.dev %>js/maps2.js',
            //     // '<%= dirs.dev %>js/maps.config.js'
            //   ],
            //   dest: '<%= dirs.dev %>js/scriptmaps.js',
            // }
        },

        uglify: {
            my_target: {
              files: {
                '<%= dirs.output %>vendors.min.js': ['<%= dirs.dev %>vendors.js']
                ,'<%= dirs.output %>scripts.min.js': ['<%= dirs.output %>scripts.js']
                // ,'<%= dirs.output %>js/maps.min.js': ['<%= dirs.dev %>js/scriptmaps.js']
              }
            }
        },

        copy: {
          main: {
            expand: true,
            cwd: '<%= dirs.dev %>atoms/icons',
            src: '**',
            dest: '<%= dirs.output %>/icons',
          },
        },

        // Atualizar
        watch: {
            styles: {
                // Which files to watch (all .less files recursively in the less directory)
                // files: [
                //     'Gruntfile.js',
                //     '<%= dirs.dev %>*.less',
                //     '<%= dirs.dev %>*/*.less',
                //     '<%= dirs.dev %>*.js',
                //     '<%= dirs.dev %>*/*.js',
                // ],
                files: [
                    'Gruntfile.js',
                    '<%= dirs.dev %>*.scss',
                    '<%= dirs.dev %>*/*.scss',
                    '<%= dirs.dev %>*.js',
                    '<%= dirs.dev %>*/*.js',
                ],
                // tasks: ['less','replace','cmq','cssmin','concat'],
                // tasks: ['less','cmq','postcss','concat','uglify'],
                tasks: ['sass','cmq','postcss','concat','uglify'],
                options: {
                    nospawn: true
                }
            }
        },
    });
    // registrando tarefa default
    grunt.registerTask( 'default', ['watch'] );
    // grunt.registerTask( 'compile', ['less','cmq','postcss','concat','uglify','copy','watch'] );
    grunt.registerTask( 'compile', ['sass','cmq','postcss','concat','uglify','copy','watch'] );
    grunt.registerTask( 'deploy', ['deploy'] );
};
