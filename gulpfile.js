// Sass configuration
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const livereload = require('gulp-livereload');

gulp.task('sass', async function () {
    return gulp.src('sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('style.css'))
        .pipe(livereload());
});
