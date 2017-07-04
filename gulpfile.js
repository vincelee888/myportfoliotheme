'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var runSequence = require('run-sequence');

gulp.task('sassify', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./styles/'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sassify']);
});

gulp.task('minify-css', function() {
  return gulp.src('./styles/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./'));
});

gulp.task('sass', function(callback) {
  runSequence('sassify',
              'minify-css',
              callback);
})
