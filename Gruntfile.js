module.exports = function(grunt) {

  // Project config
  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),

    // start "bowercopy" task
    bowercopy: {

      /*
       * don"t send messages to saying that Bower components aren"t
       * configured...ignore them instead. Also, don"t run any bower
       * tasks when grunt runs this task.
       */
      options: {
        ignore: ["gulp", "jquery"],
        runBower: false
      },

      // Copy Bootstrap CCS over
      bscss: {

        // copy to the "css-build" directory
        options: {
          destPrefix: "css-build/"
        },
        files: {
          "bootstrap.css": "bootstrap/dist/css/bootstrap.css"
        }
      }, // end "bowercopy:bscss" task

      // Copy jQuery over
      jq: {

        // copy to the "css-build" directory
        options: {
          destPrefix: "themes/parlor/js/libs/"
        },
        files: {
          "jquery.min.js": "jquery/dist/jquery.min.js"
        }
      } // end "bowercopy:jq" task
    }, // end "bowercopy" task

    // start "coffee" task
    coffee: {
      compile: {
        options: {
          bare: true
        },
        files: {
          // compile & concat .coffee files to a single file called
          // "build/js/main.js"
          "themes/parlor/js/main.js": ["coffee/main.coffee"]
        }
      }
    }, // end "coffee" task

    shell: {
      lessCoreBuild: {
        command: "lessc css-build/style.less > css-build/style.css"
      }
    },

    exec: {
      get_grunt_sitemap: {
        command: 'curl --silent --output sitemap.json http://localhost:8888/?show_sitemap'
      }
    },

    uncss: {
  dist: {
    options: {
      ignore       : [/expanded/,/js/,/wp-/,/align/,/admin-bar/],
      stylesheets  : ['css/app.css'],
      ignoreSheets : [/fonts.googleapis/],
      urls         : [], //Overwritten in load_sitemap_and_uncss task
    },
    files: {
      'css/app.clean.css': ['**/*.php']
    }
  }
}
  });

  grunt.loadNpmTasks("grunt-bowercopy");
  grunt.loadNpmTasks("grunt-contrib-coffee");
  grunt.loadNpmTasks("grunt-shell");
  grunt.loadNpmTasks('grunt-exec');



  grunt.registerTask('load_sitemap_json', function() {
  var sitemap_urls = grunt.file.readJSON('./sitemap.json');
  grunt.config.set('uncss.dist.options.urls', sitemap_urls);


  grunt.registerTask('deploy_build',
  ['exec:get_grunt_sitemap','load_sitemap_json','uncss:dist','sass:dist']);
});

};
