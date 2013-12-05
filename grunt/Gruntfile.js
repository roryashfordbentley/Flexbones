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
                        'js/gridtacular/gridtacular.js',
                        'js/scripts.js',
                        'js/ga.js'
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
    });

    // Load the plugins

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // now that we've loaded the package.json and the node_modules we set the base path
  // for the actual execution of the tasks
  grunt.file.setBase('../');

    // Default task(s).

    grunt.registerTask('default', ['jshint', 'uglify','cssmin']);
};