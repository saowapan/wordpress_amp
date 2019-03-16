var gulp = require('gulp');
var plumber = require('gulp-plumber');

var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');

gulp.task('sass', function () {
    gulp.src('resources/amp_sass/*.scss')
        .pipe(plumber())
        .pipe(sass())
        .pipe(cssnano())
        .pipe(gulp.dest('dist'));
});

gulp.task('default', ['sass']);