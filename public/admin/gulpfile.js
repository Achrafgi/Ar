'use strict';

var gulp = require('gulp');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
let cleanCSS = require('gulp-clean-css');


gulp.paths = {
    dist: 'dist',
};

var paths = gulp.paths;


gulp.task('css', function () {
    gulp.src([
        './node_modules/mdi/css/materialdesignicons.min.css',
        './node_modules/simple-line-icons/css/simple-line-icons.css',
        './node_modules/flag-icon-css/css/flag-icon.min.css',
        './node_modules/chartist/dist/chartist.min.css',
        './node_modules/jvectormap/jquery-jvectormap.css',
        './css/style.css'
    ])
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
        .pipe(concat('admin.style.min.css'))
        .pipe(gulp.dest('dist'));
});

gulp.task('js', function () {
    gulp.src([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/popper.js/dist/umd/popper.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        './node_modules/flot/jquery.flot.js',
        './node_modules/flot/jquery.flot.resize.js',
        './node_modules/flot.curvedlines/curvedLines.js',
        './js/off-canvas.js',
        './js/misc.js',
        './js/dashboard.js'
    ])
        .pipe(concat('admin.script.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});


gulp.task('default', ['css', 'js']);