module.exports = function(grunt){


    grunt.initConfig({

            pkg: grunt.file.readJSON('package.json'),

            /**
             * sass Task
             */
            sass:{

                    dev:{
                            options:{
                                    style:"expanded",
                                    sourcemap:'none'
                            },

                            files:{
                                    'style.css':'css/style.scss',
                                    'svg-style-2.css':'css/svg-style-2.scss',
																		'svg-style-3.css':'css/svg-style-3.scss',
                                    'ie.css':'css/ie.scss'

                                    /*where file goes-----/where file from*/
                            }
                    },

                    dist:{
                            options:{
                                    style:"compressed",
                                    sourcemap:'none'
                            },
                            files:{
                                    'style-min.css':'css/style.scss',
                                    'svg-style-2-min.css':'css/svg-style-2.scss',
																		'svg-style-3-min.css':'css/svg-style-3.scss',
                                    'ie-min.css':'css/ie.scss'

                                    /*where file goes-----/where file from*/
                            }
                    }
            },

            
            /**
             * Watch task
             */

            watch:{

                    css:{
                            files:'**/*.scss',
                            tasks:['sass']
                    }
            }


    });

    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.loadNpmTasks('grunt-contrib-watch');
   
    grunt.registerTask('default', ['watch']);


}

/* add bag (!) to wordpress css theme top-title so that it shows on minified file*/
