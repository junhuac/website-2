var gulp = require("gulp");
var sass = require("gulp-sass");
var watchSass = require("gulp-watch-sass");
var gs		= require('gulp-selectors');
var del   = require('del');
var run   = require('run-sequence');

gulp.task("mangle", ['sass', 'bootstrap'], function() {
  gulp.src(['**/*.css', '**/*.html', '**/*.php', '**/.+(htpasswd|htaccess)', '!dist/**/*.*', '!node_modules/**/*.*'])
    // .pipe(gs.run())
    .pipe(gulp.dest('dist'));
});

gulp.task("sass", function () {
  return gulp.src('assets/scss/**/*.scss')
  .pipe(sass())
    .pipe(gulp.dest('assets/css/'));
});

gulp.task("bootstrap", function() {
  return gulp.src('node_modules/bootstrap/dist/css/bootstrap.min.css')
    .pipe(gulp.dest('assets/css/'));
});

gulp.task("images", function() {
  return gulp.src(['assets/images/**/*.*'])
    .pipe(gulp.dest('dist/assets/images/'));
});


gulp.task("js", function() {
  return gulp.src(['assets/js/**/*.*', 'node_modules/bootstrap/dist/js/bootstrap.min.js'])
    .pipe(gulp.dest('dist/assets/js/'));
});


gulp.task("fonts", function() {
  return gulp.src(['assets/fonts/**/*.*'])
    .pipe(gulp.dest('dist/assets/fonts/'));
});

gulp.task("clean", function() {
  return del(['dist/']);
});

gulp.task("build", ['clean'],  function() {
  run(['mangle', 'images', 'js', 'fonts']);
});

gulp.task("sass:watch", ['sass'], function(){
  watchSass([
    'assets/scss/**/*.scss'
  ])
  .pipe(sass())
  .pipe(gulp.dest("assets/css"));
});
//