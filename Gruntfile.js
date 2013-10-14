/**
 * Gruntfile.js
 * Run 'grunt' from this folder in the command line to execute.
 * Check CMD for any errors.
 */

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
        all: [
            'Gruntfile.js',
            'js/gridtacular.js',
            'scripts.js'
        ]
    },
    uglify: {
      my_target: {
        files: {
          'js/scripts.min.js': [
              'js/rem_polyfill.js',
              'js/gridtacular.js', 
              'js/scripts.js',
              'js/ga.js'
          ]
        }
      }
    },
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
      },

    }

  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task(s).
  grunt.registerTask('default', ['jshint', 'uglify','cssmin']);

};