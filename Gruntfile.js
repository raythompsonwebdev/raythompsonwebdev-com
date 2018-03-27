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
                src: ['raythompsonwebdev-com/js/dist/**/*.js'],
                dest: 'raythompsonwebdev-com/js/dist/concat/<%= pkg.name %>.js'
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
                    'dist/maps.min.js': ['raythompsonwebdev-com/js/maps.js'],
                    'dist/customizer.min.js': ['raythompsonwebdev-com/js/customizer.js'],
                    
                    'dist/master.min.js': ['raythompsonwebdev-com/js/master.js'],
                    'dist/navigation.min.js': ['raythompsonwebdev-com/js/navigation.js'],
                    'dist/profile.min.js': ['raythompsonwebdev-com/js/profile.js'],
                    'dist/skip-link-focus-fix.min.js': ['raythompsonwebdev-com/js/skip-link-focus-fix.js'],
                    'dist/websites.min.js': ['raythompsonwebdev-com/js/websites.js'],
                    'dist/jquery.cookie.min.js': ['raythompsonwebdev-com/js/jquery.cookie.js'],

                    'dist/inc/lightbox/js/jquery.fancybox.js.min.js': ['raythompsonwebdev-com/js/inc/lightbox/js/jquery.fancybox.js'],
                    'dist/inc/lightbox/js/jquery.fancybox.pack.js.min.js': ['raythompsonwebdev-com/js/inc/lightbox/js/jquery.fancybox.pack.js'],
                    'dist/inc/lightbox/js/lightbox.min.js': ['raythompsonwebdev-com/js/inc/lightbox/js/lightbox.js'],

                    'dist/inc/helpers/jquery.fancybox-buttons.min.js': ['raythompsonwebdev-com/js/inc/helpers/jquery.fancybox-buttons.js'],
                    'dist/inc/helpers/jquery.fancybox-media.min.js': ['raythompsonwebdev-com/js/inc/helpers/jquery.fancybox-media.js'],
                    'dist/inc/helpers/jquery.fancybox-thumbs.min.js': ['raythompsonwebdev-com/js/inc/helpers/jquery.fancybox-thumbs.js']
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
                    'raythompsonwebdev-com/css/old-files/ie-min.css': 'raythompsonwebdev-com/css/ie.scss',
                   'raythompsonwebdev-com/js/dist/inc/lightbox/css/jquery.fancybox.min.css': 'raythompsonwebdev-com/js/inc/lightbox/css/jquery.fancybox.css'
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
