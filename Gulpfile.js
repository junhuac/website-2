var gulp = require("gulp");
var sass = require("gulp-sass");
var watchSass = require("gulp-watch-sass");
var gs		= require('gulp-selectors');

gulp.task("mangle", ['sass'], function() {
  gulp.src(['**/*.css', '**/*.html', '!dist/**/*.*', '!node_modules/**/*.*'])
    // .pipe(gs.run())
    .pipe(gulp.dest('dist'));
});

gulp.task("sass", function () {
  return gulp.src('assets/scss/**/*.scss')
  .pipe(sass())
    .pipe(gulp.dest('assets/css/'))
});

gulp.task("images", function() {
  return gulp.src(['assets/images/**/*.*'])
    .pipe(gulp.dest('dist/assets/images/'))
});


gulp.task("js", function() {
  return gulp.src(['assets/js/**/*.*', 'node_modules/bootstrap/dist/js/bootstrap.min.js'])
    .pipe(gulp.dest('dist/assets/js/'))
});


gulp.task("fonts", function() {
  return gulp.src(['assets/fonts/**/*.*'])
    .pipe(gulp.dest('dist/assets/fonts/'))
});

gulp.task("build", ['mangle', 'images', 'js', 'fonts'],  function() {

});

gulp.task("sass:watch", ['sass'], function(){
  watchSass([
    'assets/scss/**/*.scss'
  ])
  .pipe(sass())
  .pipe(gulp.dest("assets/css"))
});
//