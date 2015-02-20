// Single var pattern of gulp (require) stuff in full effect!!!

var gulp = require("gulp"), // "require" gulp
    minifyCSS = require("gulp-minify-css"), // Minify CSS
    concatCss = require("gulp-concat-css"), // Concatenate CSS only
    csslint = require("gulp-csslint"), // Lint CSS
    watch = require("gulp-watch"), // Watch files changes
    imagemin = require('gulp-imagemin'), // Minifying images
    autoprefixer = require('gulp-autoprefixer');

// End single var pattern

// Needed to run grunt tasks through gulp
require("gulp-grunt")(gulp);

/*
 *  ===================================================================
 *  | STORE PREPROCESSOR FILE REFERENCES IN VARIABLES |
 *  ===================================================================
 */
var lessFiles = ["css-build/*.less", "css-build/**/*.less"], // LESS
    coffeeFiles = ["coffee/*.coffee"]; // Coffeescript

    /*
     * IGNORE ARRAY
     * ============
     * Selectors NOT to be removed when "gulp uncss" task runs.
     * Try to list them alphabetically and in the following order:
     *
     * 1. Page elements first (<nav>, <aside>, etc.)
     * 2. IDs second
     * 3. Classes third
     */




/*
 *  ===================================================================
 *  | CSS BUILD TASK |
 *
 * Running "gulp buildcss" performs the following sequence of tasks...
 *
 * 1. Lints "css-build/style.css"
 * 2. Concatenate selected .css files listed in "gulp.src"
 * 3. Runs an autoprefixer
 * 4. Minify CSS
 * 5. Loads the final "style.css" in the root of the theme folder
 *
 * (*) gulp "hints" are cool...read more about them at:
 * https://github.com/gulpjs/gulp/blob/master/docs/API.md
 *  ===================================================================
 */
gulp.task("buildcss", ['lint','less'],function () {
  gulp.src(['css-build/wp-comment-block.css','css-build/bootstrap.css', 'css-build/style.css'])
  .pipe(concatCss("style.css"))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(minifyCSS({
    keepBreaks: true
  }))
  .pipe(gulp.dest("themes/parlor/"))
});

/*
 *  ===================================================================
 *  | CSS LINT ASK |
 *
 *  Lint "css-build/style.css' ONLY!!!
 *  ===================================================================
 */
gulp.task('lint', function() {
  gulp.src('css-build/style.css')
    .pipe(csslint())
    .pipe(csslint.reporter());
});

/*
 *  ===================================================================
 *  | IMAGE MINIFICATION TASK |
 *
 *  Take all images in "image-min/" & minify them out to "images/"
 *  ===================================================================
 */
gulp.task('images', function () {
  return gulp.src('image-min/*')
  .pipe(imagemin({
    progressive: true,
    svgoPlugins: [{removeViewBox: false}]
  }))
  .pipe(gulp.dest('themes/parlor/images/'));
});

/*
 *  ===================================================================
 *  | "gulp-grunt" TASKS...RUN GRUNT TASKS VIA GULP!!!! |
 *  ===================================================================
 */
// Run the "grunt less" task
gulp.task("less", function () {
  gulp.run("grunt-shell")
});

// Run the "grunt coffee" task
gulp.task("coffee", function () {
  gulp.run("grunt-coffee");
});

// BOWERCOPY TASKS
// Copy over ALL the Bower Components!!!
gulp.task("bowercopy", function () {
  gulp.run("grunt-bowercopy");
});

// Copy over Bootstrap core .css only
gulp.task("bowerbscss", function () {
  gulp.run("grunt-bowercopy:bscss");
});

// Copy over jQuery v.1.11.x only
gulp.task("bowerjq", function () {
  gulp.run("grunt-bowercopy:jq");
});


/*
 *  ===================================================================
 *  | START WATCH TASK |
 *
 *  Be careful of watching a lot of files because that may eat up
 *  computer memory...at least, it does in Grunt.
 *  ===================================================================
 */


gulp.task("watch", function () {

  // Watch for CSS/JS file changes

  gulp.watch(lessFiles, ["buildcss"]);
  gulp.watch(coffeeFiles, ["coffee"]);
});
