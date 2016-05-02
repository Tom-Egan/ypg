module.exports = function (grunt) {

    grunt.initConfig({
        uncss: {
            dist: {
                files: [
                    { src: '*.php', dest: 'cleancss/tidy.css' }
                ]
            }
        }
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-uncss');

    // Default tasks.
    grunt.registerTask('default', ["uncss"]);

};