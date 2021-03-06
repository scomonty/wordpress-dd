module.exports = function(grunt) {
   require('jit-grunt')(grunt);

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
     grunt.loadNpmTasks('grunt-browserify');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
            browserify: {
      'scripts/master.js': [
      'js/mobileNav.js'
      ],
      options: {
        transform: ["debowerify"]
      }
    },
            concat: {
                build: {
                    src: 'js/*.js',
                    dest: 'scripts/scripts.js'
                },
            },
            less: {
                development: {
                    options: {
                        compress: true,
                        yuicompress: true,
                        optimization: 2
                    },
                    files: {
                        "styles/master.css": "less/*.less" // destination file and source file
                    }
                }
            },
            watch: {
                styles: {
                    files: ['less/*.less'], // which files to watch
                    tasks: ['less'],
                    options: {
                        nospawn: true
                    }
                }
            },
            uglify: {
                build: {
                    src: 'scripts/scripts.js',
                    dest: 'scripts/master.js'
                }
            }
        }
    );

    grunt.registerTask('buildjs', ['browserify'] );
    grunt.registerTask('default', ['less', 'watch']);

};
