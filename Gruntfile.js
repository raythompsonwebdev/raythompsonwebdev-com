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
                src: ['js/dist/**/*.js'],
                dest: 'js/dist/concat/<%= pkg.name %>.js'
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
                    'js/minified/maps.min.js': ['js/maps.js'],
                    'js/minified/customizer.min.js': ['js/customizer.js'],
                    'js/minified/master.min.js': ['js/master.js'],
                    'js/minified/navigation.min.js': ['js/navigation.js'],
                    'js/minified/profile.min.js': ['js/profile.js'],
                    'js/minified/skip-link-focus-fix.min.js': ['js/skip-link-focus-fix.js'],
                    'js/minified/websites.min.js': ['js/websites.js'],
                    'js/minified/jquery.cookie.min.js': ['js/jquery.cookie.js']

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
                    'style.css': 'css/style.scss',
                    'svg-style-3.css': 'css/svg-style-3.scss',
                    'ie.css': 'css/ie.scss'
                    /*where file goes-----/where file from*/
                }
            },

            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: 'auto'
                },
                files: {
                    'css/minified/style-min.css': 'css/style.scss',
                    'css/minified/svg-style-3-min.css': 'css/svg-style-3.scss',
                    'css/minified/ie-min.css': 'css/ie.scss'
                    /*where file goes-----/where file from*/
                }
            }
        },

        /**
         * JS Hint
         */
        jshint: {
            files: ['Gruntfile.js', 'js/**/*.js', 'test/**/*.js'],
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
                files: '**/*.scss',
                tasks: ['sass', 'jshint']
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
