/**
* gruntfile.js
*/

module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        
        /**
         * Sass Compiling Task
         *
         * Compiles Sass stylesheets using libsass via node-sass
         * Very quick BUT doesn't fully support latest sass release
         * due to libsass being behind.
         */

        sass: {
            dist: {
                files: {
                    'style.css' : 'assets/sass/style.scss'
                }
            },
            dev: {
                options: {
                     outputStyle: 'compact',
                     precision: '10'
                },
                files: {
                    'style.css' : 'assets/sass/style.scss'
                }
            }
        },

        /**
         * Watch Task
         * 
         * Watches for filesystem changes and triggers other tasks
         * based on the below optiions
         */

        watch: {
            scss: {
                files: '**/*.scss',
                options: {
                    livereload: false
                }
            },
            css: {
                files: '**/*.scss',
                tasks: ['sass','autoprefixer','notify:watchsass'],
            },
            markup: {
                files: '**/*.php'
            },
            js: {
                files: [
                    'assets/js/**/*.js',
                    '!assets/js/min/*.js'
                ],
                tasks: ['concat','uglify','notify:watchjs']
            },
            options: {
                spawn: false,
                livereload: true
            }
        },

        /**
         * Concatenate Task
         *
         * Merges a supplied array of .js files into a single .js file
         * Files can be excluded by adding a ! prefix.
         */

        concat: {
            options: {
                // define a string to put between each file in the concatenated output
                separator: '\n/* nf */\n'
            },
            dist: {
                // the files to concatenate
                src: [
                    'assets/js/libs/*.js',
                    'assets/js/*.js'
                ],
                // the location of the resulting JS file
                dest: 'assets/js/min/scripts.min.js'
            }
        },

        /**
         * Uglify Task
         * This task minifies a single .js file (scripts.min.js)
         * To be called once the concat task has completed
         */

        uglify: {
            options: {
                banner: '/*Build date/time <%= grunt.template.today("dd/mm/yyyy h:MM:ss") %>*/\n'
            },
            all: {
                files: { 'assets/js/min/scripts.min.js':'assets/js/min/scripts.min.js'}
            }
        },

        /**
         * Notify Task
         * Native OS notification system
         * Dispalys a notification on completion or failure.
         */

        notify: {
            watchsass: {
                options: {
                    title: 'Compile Complete',
                    message: 'SASS compiled successfully'
                }
            },
            watchjs: {
                options: {
                    title: 'JS Minify Complete',
                    message: 'Scripts successfully concatenated and minified'
                }
            }
        },

        /**
         * Autoprefixer
         * Adds browser based prefixes to CSS3 rules
         */

        autoprefixer: {
            single_file: {
                options: {
                     browsers: ['last 10 version']
                },
                src: 'style.css',
                dest: 'style.css'
            }
        }
    });

    /**
     * Load Plugins
     * Load the required plugins
     */

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass'); //libsass via nodesass
    grunt.loadNpmTasks('grunt-notify');
    grunt.loadNpmTasks('grunt-autoprefixer');

    /**
     * Register Tasks
     * create and register tasks including the 'default'
     * task that is run when you execute 'grunt'
     */

    grunt.registerTask('default',['watch']);    
    grunt.registerTask('minifyjs',['concat','uglify']);
}