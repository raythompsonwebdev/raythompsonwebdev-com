module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        /**
         * Concat
         */
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['raythompsonwebdev-com/js/**/*.js'],
                dest: 'dist/<%= pkg.name %>.js'
            }
        },

        /**
         * Uglify
         */
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            my_target: {
                files: {
                    'dist/<%= pkg.name %>.min.js': ['js/**/*.js']
                }
            }
        },
        /**
         * sass Task
         */
        sass: {
            dev: {
                options: {
                    style: 'expanded',
                    sourcemap: 'auto'
                },
                files: {
                    'raythompsonwebdev-com/css/old-files/style.css': 'raythompsonwebdev-com/css/style.scss',
                    'raythompsonwebdev-com/css/old-files/svg-style-3.css': 'raythompsonwebdev-com/css/svg-style-3.scss',
                    'raythompsonwebdev-com/ie.css': 'raythompsonwebdev-com/css/ie.scss'
                            /*where file goes-----/where file from*/
                }
            },

            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: 'auto'
                },
                files: {
                    'raythompsonwebdev-com/style-min.css': 'raythompsonwebdev-com/css/style.scss',
                    'raythompsonwebdev-com/svg-style-3-min.css': 'raythompsonwebdev-com/css/svg-style-3.scss',
                    'raythompsonwebdev-com/css/old-files/ie-min.css': 'raythompsonwebdev-com/css/ie.scss'
                            /*where file goes-----/where file from*/
                }
            }
        },

        /**
         * JS Hint
         */
        jshint: {
            files: ['Gruntfile.js', 'raythompsonwebdev-com/js/**/*.js', 'test/**/*.js'],
            options: {
                // options here to override JSHint defaults

                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },
        /**
         * Watch task
         */
        watch: {
            css: {
                files: 'raythompsonwebdev-com/**/*.scss',
                tasks: ['sass']
            }
        }
    });



    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');

    grunt.registerTask('test', ['jshint']);
    grunt.registerTask('default', ['watch', 'jshint', 'concat', 'uglify', 'sass']);


}

/* add bag (!) to wordpress css theme top-title so that it shows on minified file*/
