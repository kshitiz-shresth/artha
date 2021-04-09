const { watch, series } = require('gulp');
var gulp = require('gulp'),
  sass = require('gulp-sass'),
  autoprefixer = require('gulp-autoprefixer'),
  minifycss = require('gulp-minify-css'),
  rename = require('gulp-rename');

function javascript(cb) {
  cb();
}

function scss(cb) {
  // log("Generate CSS files " + (new Date()).toString());
  gulp
    .src('assets/scss/style.scss')
    .pipe(sass({ style: 'expanded' }))
    .on('error', function (err) {
      console.error(err.toString());
      this.emit('end');
    })
    .pipe(autoprefixer('last 3 version', 'safari 5', 'ie 8', 'ie 9'))
    .pipe(gulp.dest('./assets/css'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifycss())
    .pipe(gulp.dest('./assets/css'));
  cb();
}

exports.default = function () {
  // You can use a single task
  watch('assets/scss/**/*.scss', scss);
  // Or a composed task
  // watch('src/*.js', series(clean, javascript));
};
