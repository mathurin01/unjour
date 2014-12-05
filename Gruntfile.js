module.exports = function(grunt){

    grunt.initConfig({
        jshint: {
            all: ['web/bundles/qdunjour/js/*']
        },

        phpcs: {
            application: {
                dir: ['src']
            },
            options: {
                bin: 'C:/xampp/php/phpcs',
                standard: 'PSR2'
            }
        },

        imagemin: {
            dist: {                         // Another target
                files: [{
                    expand: true,                  // Enable dynamic expansion
                    cwd: 'web/bundles/qdunjour/images/',                   // Src matches are relative to this path
                    src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
                    dest: 'web/bundles/qdunjour/imagesmin/'                  // Destination path prefix
                }]
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-phpcs');
    grunt.loadNpmTasks('grunt-contrib-imagemin');

    grunt.registerTask('default', ['jshint', 'imagemin']);
}