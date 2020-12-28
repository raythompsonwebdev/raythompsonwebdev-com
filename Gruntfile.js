module.exports = function (grunt) {
  const sass = require("node-sass");

  require("load-grunt-tasks")(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),

    makepot: {
      target: {
        options: {
          cwd: "", // Directory of files to internationalize.
          domainPath: "/languages", // Where to save the POT file.
          exclude: [], // List of files or directories to ignore.
          include: [], // List of files or directories to include.
          mainFile: "", // Main project file.
          potComments: "Custom Copyright (c) {{year}}", // The copyright at the beginning of the POT file.
          potFilename: "raythompsonwebdev-com.pot", // Name of the POT file.
          potHeaders: {
            poedit: true, // Includes common Poedit headers.
            "x-poedit-keywordslist": true, // Include a list of all possible gettext functions.
          }, // Headers to add to the generated POT file.
          processPot: null, // A callback function for manipulating the POT file.
          type: "wp-theme", // Type of project (wp-plugin or wp-theme).
          updateTimestamp: true, // Whether the POT-Creation-Date should be updated without other changes.
          updatePoFiles: false, // Whether to update PO files in the same directory as the POT file.
        },
      },
    },
    addtextdomain: {
      options: {
        textdomain: "raythompsonwebdev-com", // Project text domain.
        updateDomains: [], // List of text domains to replace.
      },
      target: {
        files: {
          src: ["*.php", "**/*.php", "!node_modules/**", "!tests/**"],
        },
      },
    },

    babel: {
      files: {
        expand: true,
        src: ["js/*.js"],
        dest: "js/babelfiles/",
        ext: "-compiled.js",
      },
      options: {
        sourceMap: true,
        presets: ["@babel/preset-env"],
      },
    },
    /**
     * Concat
     */
    concat: {
      options: {
        separator: ";",
      },
      dist: {
        src: ["js/minified/**/*.js"],
        dest: "js/dist/concat/<%= pkg.name %>.js",
      },
    },
    /**
     * Uglify
     */
    uglify: {
      options: {
        banner:
          '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n',
      },
      my_target: {
        files: {
          "js/minified/customizer.min.js": ["js/customizer.js"],
          "js/minified/master.min.js": ["js/master.js"],
          "js/minified/profile.min.js": ["js/profile.js"],
          "js/minified/websites.min.js": ["js/websites.js"],
        },
      },
    },
    /**
     * sass Task
     */
    sass: {
      options: {
        implementation: sass,
        sourceMap: true,
      },
      dev: {
        files: {
          "style.css": "css/style.scss",
          "ie.css": "css/ie.scss",
          /*where file goes-----/where file from*/
        },
      },

      dist: {
        files: {
          "css/minified/style-min.css": "css/style.scss",
          "css/minified/ie-min.css": "css/ie.scss",

          /*where file goes-----/where file from*/
        },
      },
    },

    /**
     * Watch task
     */
    watch: {
      css: {
        files: "**/*.scss",
        tasks: ["sass"],
      },
    },
  });

  grunt.registerTask("default", ["watch", "concat", "uglify", "sass", "babel"]);
  grunt.loadNpmTasks("grunt-wp-i18n");
};

/* add bag (!) to wordpress css theme top-title so that it shows on minified file*/
