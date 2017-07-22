module.exports = function(grunt){

    var mozjpeg = require('imagemin-mozjpeg');

    grunt.initConfig({

            pkg: grunt.file.readJSON('package.json'),
        
    /*    imagemin: {                          // Task 
            static: {                          // Target 
              options: {                       // Target options 
                optimizationLevel: 3,
                svgoPlugins: [{ removeViewBox: false }],
                use: [mozjpeg()]
              },
              files: {                         // Dictionary of files 
                'images/optimised images/img.png': 'images/img.png', // 'destination': 'source' 
                'images/optimised images/img.jpg': 'images/img.jpg',
                'images/optimised images/img.gif': 'images/img.gif'
              }
            }, */
  /*          dynamic: {                         // Another target 
              files: [{
                expand: true,                  // Enable dynamic expansion 
                cwd: 'src/',                   // Src matches are relative to this path 
              src: ['**//*.{png,jpg,gif}'],   // Actual patterns to match-remove extra backslash above
                dest: 'dist/'                  // Destination path prefix 
              }]
            }
          },*/

            /**
             * sass Task
             */
            sass:{

                    dev:{
                            options:{
                                    style:"expanded",
                                    sourcemap:'auto'
                            },

                            files:{
                                    'style.css':'css/style.scss',
                                    'svg-style-3.css':'css/svg-style-3.scss',
                                    
                                    'ie.css':'css/ie.scss'

                                    /*where file goes-----/where file from*/
                            }
                    },

                    dist:{
                            options:{
                                    style:"compressed",
                                    sourcemap:'auto'
                            },
                            files:{
                                    'style-min.css':'css/style.scss',
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
    
    //grunt.loadNpmTasks('grunt-contrib-imagemin');
    
    //grunt.registerTask('default', ['imagemin']);
   
    grunt.registerTask('default', ['watch', 'sass']);


}

/* add bag (!) to wordpress css theme top-title so that it shows on minified file*/
