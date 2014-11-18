/**
* gruntfile.js
*/

module.exports = function(grunt) {

    require('time-grunt')(grunt); // time-grunt

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        /**
         * Grunt Sass Task (rubysass)
         *
         * Handles compiling of Sass scripts
         */
        
        sass: {
            dist: {
                options: {
                    sourcemap: 'auto',
                    style: 'expanded',
                    precision: 10
                },
                files: {
                    'style.css': 'assets/sass/style.scss',
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
                files: 'assets/sass/**/*.scss',
                tasks: ['sass','notify:watchsass'],
                options: {
                    livereload: false
                }
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
                    'assets/js/min/scripts.min.js',
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
         * Displays a notification on completion or failure.
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
            },
            images: {
                options: {
                    title: 'Image minimising complete',
                    message: 'All images within source directory succesfully minified'
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
        },


        /**
         * Imagemin
         * Reduce image filesize
         * Supports PNG, JPG, GIF, ICO
         * Looks in assets/imgs folder for matching files
         * Add additional folders if needed
         *
         * 
         */

        imagemin: {
            options: {
                optimizationLevel: 3
            },
            build: {
                files: [{
                    expand: true,
                    cwd: 'assets/imgs/',
                    src: ['**/*.{png,jpg,gif,ico}'],
                    dest: 'assets/imgs/'
                }]
            }
        },


        /**
         * SVG2PNG
         * Converts SVG files to PNG
         * Works nicely with svgeezy.
         */

        svg2png: {
            all: {
                files: [{ 
                    cwd: 'assets/imgs/', 
                    src: ['**/*.svg'], 
                    dest: 'assets/imgs/' 
                }]
            }
        },


        /**
         * Pixrem
         * insert pixel fallback for rem values
         */
        
        pixrem: {
            options: {
                rootvalue: '62.5%',
            },
            dist: {
                src: 'style.css',
                dest: 'style.css'
            }
        },


        /**
         * Browserify
         *
         * Node style dependency management
         */
        
        browserify: {
            'assets/js/scripts.min.js': ['assets/js/scripts.js'] // dest/src
        }
    });


    /**
     * Register Tasks (also load them as needed)
     * create and register tasks and also load 
     * npm tasks as needed
     */


    /**
     * Default Task / Watch Task
     */

    grunt.registerTask('default', [], function () { 
        grunt.loadNpmTasks('grunt-contrib-watch');
        grunt.loadNpmTasks('grunt-autoprefixer');
        grunt.loadNpmTasks('grunt-pixrem');
        grunt.loadNpmTasks('grunt-notify');

        grunt.task.run('watch','autoprefixer','pixrem');
    });

   
    /**
     * Minify JS Task
     */
    
    grunt.registerTask('minifyjs', [], function () {
        grunt.loadNpmTasks('grunt-contrib-concat');
        grunt.loadNpmTasks('grunt-contrib-uglify');
        grunt.loadNpmTasks('grunt-notify');

        grunt.task.run('concat','uglify');
    });


    /**
     * JS Browserify Build Task
     */

    grunt.registerTask('jsbuild', [], function () {
        grunt.loadNpmTasks('grunt-browserify');
        grunt.loadNpmTasks('grunt-notify');

        grunt.task.run('browserify');
    });

    /**
     * Optimise Images Task
     */
    
    grunt.registerTask('images', [], function () {
        grunt.loadNpmTasks('grunt-contrib-imagemin');
        grunt.loadNpmTasks('grunt-svg2png');
        grunt.loadNpmTasks('grunt-notify');
        
        grunt.task.run('imagemin','svg2png','notify:images');
    });
}