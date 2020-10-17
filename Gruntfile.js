module.exports = function(grunt) {

  const sass = require("node-sass");

  require("load-grunt-tasks")(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),

    babel: {
      files: {
          expand: true,
          src: ['js/*.js'],
          dest:'js/babelfiles/',
          ext: '-compiled.js'
      },
      options: {
          sourceMap: true,
          presets: ['@babel/preset-env']
      }
    },
    /**
     * Concat
     */
    concat: {
      options: {
        separator: ";"
      },
      dist: {
        src: ["js/minified/**/*.js"],
        dest: "js/dist/concat/<%= pkg.name %>.js"
      }
    },
    /**
     * Uglify
     */
    uglify: {
      options: {
        banner:
          '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      my_target: {
        files: {

          "js/minified/customizer.min.js": ["js/customizer.js"],
          "js/minified/master.min.js": ["js/master.js"],
          "js/minified/profile.min.js": ["js/profile.js"],
          "js/minified/websites.min.js": ["js/websites.js"]
        }
      }
    },
    /**
     * sass Task
     */
    sass: {
      options: {
        implementation: sass,
        sourceMap: true
      },
      dev: {
        files: {
          "style.css": "css/style.scss",
          "ie.css": "css/ie.scss"
          /*where file goes-----/where file from*/
        }
      },

      dist: {
        files: {
          "css/minified/style-min.css": "css/style.scss",
          "css/minified/ie-min.css": "css/ie.scss"

          /*where file goes-----/where file from*/
        }
      }
    },

    /**
     * Watch task
     */
    watch: {
      css: {
        files: "**/*.scss",
        tasks: ["sass"]
      }
    }


  });


  grunt.registerTask("default", [
    "watch",
    "concat",
    "uglify",
    "sass",
    "babel"
  ]);
};

/* add bag (!) to wordpress css theme top-title so that it shows on minified file*/
