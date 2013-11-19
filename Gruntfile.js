/**
 * Gruntfile.js
 * Run 'grunt' from this folder in the command line to execute.
 * Check CMD for any errors.
 */

module.exports = function(grunt) {

    // Project configuration.
    
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Check user javascripts for errors

        jshint: {
            all: [
                'Gruntfile.js',
                'js/gridtacular.js',
                'scripts.js'
            ]
        },

        // Minify user javascripts

        uglify: {
            my_target: {
                files: {
                    'js/scripts.min.js': [
                        'js/rem_polyfill.js',
                        'js/gridtacular.js', 
                        'js/scripts.js',
                        'js/ga.js',
                        'js/prettify/prettify.js',
                        'js/prettify/css.js',
                        'js/prettify/scss.js',
                        'js/prettify/sql.js',
                        'js/prettify/yaml.js'
                    ]
                }
            }
        },

        // Minify CSS

        cssmin: {
            minify: {
                expand: true,
                cwd: '',
                src: 'style.css',
                dest: '',
                ext: '.min.css'
            },
            minify_ie: {
                expand: true,
                cwd: '',
                src: 'ie.css',
                dest: '',
                ext: '.min.css'
            }
        },

        /*copy: {
            main: {
                files: [
                    // includes files within path
                    {expand: true, src: ['path/*'], dest: 'dest/', filter: 'isFile'},

                    // includes files within path and its sub-directories
                    {expand: true, src: ['path/**'], dest: 'dest/'},

                    // makes all src relative to cwd
                    {expand: true, cwd: 'path/', src: ['**'], dest: 'dest/'},

                    // flattens results to a single level
                    {expand: true, flatten: true, src: ['path/**'], dest: 'dest/', filter: 'isFile'}
                ]
            }
        }*/

    });

    // Load the plugins

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks("grunt-contrib-copy");
    grunt.loadNpmTasks('grunt-contrib-clean');

    // Default task(s).

    grunt.registerTask('default', ['jshint', 'uglify','cssmin']);
};