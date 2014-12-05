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
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-phpcs');

    grunt.registerTask('default', ['jshint']);
}