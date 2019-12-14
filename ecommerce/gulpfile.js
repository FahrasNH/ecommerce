let gulp           = require('gulp'),
    sass           = require('gulp-sass'),
    browserSync    = require('browser-sync'),
    webpack        = require('webpack-stream'),
    autoprefixer   = require('gulp-autoprefixer')

// Compile css : "gulp sass"
gulp.task('sass', () => {
    return gulp.src('./resource/assets/sass/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./public/assets/css'))
})

// Webpack.config
gulp.task('script', () => {
    return gulp.src('./resource/assets/js/**/*.js')
    .pipe(webpack(require('./webpack.config')))
    .pipe(gulp.dest('./public/assets/js/'))
})

// Call serve : "gulp serve"
gulp.task('serve', () => {
    browserSync.init({
        server : {
            baseDir : './public/'
        }
    })

    // Route
    gulp.watch("./resource/assets/sass/**/*.scss", gulp.series('sass'))
    gulp.watch("./resource/assets/js/**/*.js", gulp.series('script'))

    // Browser Sync
    gulp.watch("./public/assets/js/**/*.js").on('change', browserSync.reload)
    gulp.watch("./public/assets/css/**/*.css").on('change', browserSync.reload)
    gulp.watch("./public/*.html").on('change', browserSync.reload)
})

gulp.task('build', gulp.series(['sass', 'script']))