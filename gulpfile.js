'use strict';

// Declare Variables
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var cssMin = require('gulp-css');

// Compile sass files
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./scss/**/*.scss', ['sass']);
});

// Concatenate Stylesheets
gulp.task('css', function() {
  gulp.src([
    './fonts/fontawesome-free-5.0.13/css/fontawesome-all.css',
    './vendors/bootstrap/css/bootstrap.css',
    './css/libs/owl.carousel.css',
    './css/libs/owl.theme.default.css',
    './css/libs/animate.css',
    './css/libs/filepond-plugin-image-preview.min.css',
    './css/libs/filepond.min.css',
    './css/style.css'
  ])
  .pipe(concat('main.min.css'))
  .pipe(cssMin())
  .pipe(gulp.dest('./css'));
});

// Concatenate Scripts
gulp.task('scripts', function() {
  gulp.src([
    './js/libs/jquery.js',
    './vendors/bootstrap/js/bootstrap.js',
    './js/libs/popper.js',
    './js/libs/owl.carousel.js',
    './js/libs/jquery.viewportchecker.min.js',
    './js/libs/filepond-plugin-file-encode.min.js',
    './js/libs/filepond-plugin-file-validate-size.min.js',
    './js/libs/filepond-plugin-image-exif-orientation.min.js',
    './js/libs/filepond-plugin-image-preview.min.js', 
    './js/libs/filepond.min.js',
    './js/functions.js'
  ])
  .pipe(concat('main.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('./js'));
})

// Run the Tasks
gulp.task('default', ['sass', 'css', 'scripts']);