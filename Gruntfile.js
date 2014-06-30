/**
* gruntfile.js
* Run 'grunt' from this folder in the command line to execute.
* Check CMD for any errors.
*/

module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        compass: {
            dist: {
                options: {
                    sassDir: 'assets/sass',
                    cssDir: ''
                }
            }
        },
        watch: {
            scss: {
                files: '**/*.scss',
                tasks: 'compass',
                options: {
                    livereload: false
                }

            },
            css: {
                 files: '**/*.css',
            },
            markup: {
                files: '**/*.php'
            },
            js: {
                files: [
                    '**/*.js',
                    '!assets/js/min/*.js'
                ],
                tasks: ['concat','uglify']
            },
            options: {
                livereload: true
            }
        },
        concat: {
            options: {
                // define a string to put between each file in the concatenated output
                separator: '\n/* nf */\n'
            },
            dist: {
                // the files to concatenate
                src: [
                    'assets/js/libs/*.js',
                    'assets/js/*.js',
                    '!assets/js/nominify/*.js',
                    '!assets/js/maps.js'
                ],
                // the location of the resulting JS file
                dest: 'assets/js/min/scripts.min.js'
            }
        },
        uglify: {
            options: {
                banner: '/*Build date/time <%= grunt.template.today("dd/mm/yyyy h:MM:ss") %>*/\n'
            },
            all: {
                files: { 'assets/js/min/scripts.min.js':'assets/js/min/scripts.min.js'}
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');


    grunt.registerTask('default',['watch','concat','uglify']);    
    grunt.registerTask('minifyjs',['concat','uglify']);

}