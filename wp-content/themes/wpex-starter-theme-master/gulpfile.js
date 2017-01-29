"use strict";

/*
Dependencies
*/
var fs = require("fs"),
    path = require("path"),
    gulp = require("gulp"),
    stylus = require("gulp-stylus"),
    autoprefixer = require("gulp-autoprefixer"),
    concat = require("gulp-concat"),
    cssmin = require("gulp-minify-css"),
    sourcemaps = require("gulp-sourcemaps"),
    exit = require('gulp-exit'),
    server = require('gulp-server-livereload'),
    urlprefix = require('stylus-urlprefix'),
    plumber = require('gulp-plumber');

/*
constants (huhuh) in the global file scope
 */
var DEST_PATH  = "./",
    STYLUS_FILES = ["./style.styl"]

/*
Watch Stylus Files
@return void
 */
function watchStylusFiles() {
    gulp.watch(STYLUS_FILES, function() {
        buildForDevelopment();
    });
}

/*
Build for development purposes (style.css) and 
@return void
 */
function buildForDevelopment() {
    var destinationDirectory = gulp.dest(DEST_PATH);

    gulp
        .src(STYLUS_FILES)
        .pipe(sourcemaps.init())
        .pipe(concat('style.styl'))
        .pipe(plumber())
        .pipe(stylus({use: [
            urlprefix({
                imagePrefix: 'http://gofrank.local/wp-content/themes/wpex-starter-theme-master/',
                fontPrefix: 'http://gofrank.local/wp-content/themes/wpex-starter-theme-master/'
            })]
        }))
        .pipe(plumber.stop())
        .pipe(autoprefixer({browsers: ['last 2 versions', 'safari 7', 'ie 9', 'opera 12.1', 'ios 7', 'android 4', 'firefox 3']}))
        .pipe(sourcemaps.write())
        .pipe(destinationDirectory)
}

/*
Gulp tasks - these are accessible by the Terminal
Example: $ gulp dev
 */

//build for development & watch
gulp.task("default", function() {
    buildForDevelopment();
    watchStylusFiles();
});