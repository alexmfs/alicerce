module.exports = function(grunt) {

    // Load all tasks
    require('load-grunt-tasks')(grunt);

    // Configuração do projeto
    grunt.initConfig({
        dirs: {
            dev: 'ui/',
            output: 'www/assets/',

            js: {
                bosons: '<%= dirs.dev %>_bosons/',
                atoms: '<%= dirs.dev %>atoms/',
                molecules: '<%= dirs.dev %>molecules/',
                organisms: '<%= dirs.dev %>organisms/',
                templates: '<%= dirs.dev %>templates/',
                pages: '<%= dirs.dev %>pages/',
            }
        },

        less: {
            '<%= dirs.output %>styles.css': ['<%= dirs.dev %>styles.less'],
        },

        postcss: {

          options: {
            map: {
              inline: false,
              annotation: '<%= dirs.output %>'
            },
            processors: [
                require("css-mqpacker")(),
                require('pixrem')(),
                require('autoprefixer')({grid :  false }),
                require('cssnext')({ features: { customProperties: {preserve : true} } }),
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
                    'node_modules/jquery/dist/jquery.min.js',
                    'node_modules/jquery-mask-plugin/dist/jquery.mask.min.js' // https://github.com/igorescobar/jQuery-Mask-Plugin
                ],
                dest: '<%= dirs.output %>vendors.js',
            },
            scripts: {
                src: [
                    '<%= dirs.js.bosons %>_start.js',
                    '<%= dirs.js.bosons %>keycodes.js',
                    '<%= dirs.js.bosons %>goto.js',
                    '<%= dirs.js.bosons %>masks.js',
                    '<%= dirs.js.bosons %>openClose.js',                    
                    '<%= dirs.js.bosons %>table-shadow-effect.js',
                    '<%= dirs.js.atoms %>menu-mobile.js',
                    '<%= dirs.js.atoms %>inputs.js',
                    '<%= dirs.js.atoms %>spinner.js',
                    '<%= dirs.js.molecules %>gallery.js',
                    '<%= dirs.js.organisms %>header.js',
                    '<%= dirs.js.organisms %>slider.js',
                    '<%= dirs.js.organisms %>slidervertical.js',
                    '<%= dirs.js.bosons %>_finish.js'
                ],
                dest: '<%= dirs.output %>scripts.js',
            }
        },
        pug: {
            compile: {
              options: {
                pretty: true,
                data: {
                  debug: false
                }
              },
              files: [ {
                cwd: "app/",
                src: "*.pug",
                dest: "www/",
                expand: true,
                ext: ".html"
              } ]
            }
        },

        uglify: {
            scripts: {
              files: {
                '<%= dirs.output %>vendors.min.js': ['<%= dirs.output %>vendors.js'],
                '<%= dirs.output %>scripts.min.js': ['<%= dirs.output %>scripts.js']
              }
            }
        },
        watch: {
            pug: {
                files: [
                    'Gruntfile.js',
                    'app/*.pug',
                    'app/**/*.pug',
                ],
                tasks: ['pug'],
                options: {
                    nospawn: true
                }
            },            
            styles: {
                files: [
                    'Gruntfile.js',
                    '<%= dirs.dev %>*.less',
                    '<%= dirs.dev %>**/*.less',
                ],
                tasks: ['less','postcss'],
                options: {
                    nospawn: true
                }
            },
            scripts: {
                files: [
                    'Gruntfile.js',
                    '<%= dirs.dev %>*/*.js',
                ],
                tasks: ['concat','uglify'],
                options: {
                    nospawn: true
                }
            }            
        }  
    });
    // registrando tarefa default
    grunt.registerTask( 'default', ['watch'] );
    grunt.registerTask( 'compile', ['less','postcss','concat','uglify','pug','watch'] );
};
