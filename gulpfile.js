const gulp = require('gulp');
const webp = require('gulp-webp');
const image = require('gulp-image');
const watch = require('gulp-watch');

gulp.task('webp', gulp.series(function () {
    return gulp.src('./assets/dist/*')
        .pipe(webp())
        .pipe(gulp.dest('./assets/images'));
}));

gulp.task('image', gulp.series(function () {
    return gulp.src('./assets/dist/*')
        .pipe(image())
        .pipe(gulp.dest('./assets/images'));
}));

gulp.task('watch', gulp.series(function () {
    gulp.watch(['./assets/dist/**'], gulp.parallel(['webp', 'image']));
}));

gulp.task('default', gulp.series(['webp', 'image', 'watch']));