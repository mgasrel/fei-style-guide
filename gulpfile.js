var autoprefixer = require ('gulp-autoprefixer');
var csscomb = require ('gulp-csscomb');
var csso = require ('gulp-csso');
var del = require ('del');
var gulp = require ('gulp');
var options = require ('gulp-options');
var preservetime = require ('gulp-preservetime');
var rename = require ('gulp-rename');
var sass = require ('gulp-sass');
var util = require ('gulp-util');

gulp.task ('clean-fonts', function () {
    if(!options.has('prod')) {
        del (['src/fonts/FontAwesome.otf']);
        del (['src/fonts/fontawesome*']);
        return del (['src/fonts/glyphicons*']);
    }
});

gulp.task ('copy-fonts', ['clean-fonts'], function () {
    if(!options.has('prod')) {
        return gulp.src (
            [
                'node_modules/font-awesome/fonts/*.*',
                'node_modules/bootstrap/dist/fonts/*.*'
            ])
            .pipe (gulp.dest ('src/fonts'))
            .pipe (preservetime ());
    }
});

gulp.task ('clean-scss', function () {
    if(options.has('prod')) {
        return del (['dist/scss']);
    }
});

gulp.task ('copy-scss', ['clean-scss'], function () {
    if(options.has('prod')) {
        return gulp.src (
            [
                'src/scss/*.*',
                '!src/scss/style-guide.scss'
            ])
            .pipe (gulp.dest ('dist/scss'))
            .pipe (preservetime ());
    }
});

gulp.task ('clean-vendors', function () {
    if(!options.has('prod')) {
        return del (['src/vendors']);
    }
});

gulp.task ('copy-vendors', ['clean-vendors'], function () {
    if(!options.has('prod')) {
        return gulp.src (
            [
                'node_modules/animate.css/animate.min.css',
                'node_modules/bootstrap/dist/js/bootstrap.min.js',
                'node_modules/bootstrap/dist/js/bootstrap.min.js.map',
                'node_modules/font-awesome/css/font-awesome.min.css',
                'node_modules/holderjs/holder.min.js',
                'node_modules/jquery/dist/jquery.min.js',
                'node_modules/jquery/dist/jquery.min.map',
                'node_modules/popper.js/dist/umd/popper.min.js',
                'node_modules/popper.js/dist/umd/popper.min.js.map',
                'node_modules/rainbow-code/dist/rainbow.min.js',
                'node_modules/rainbow-code/themes/css/github.css'
            ])
            .pipe (gulp.dest ('src/vendors'))
            .pipe (preservetime ());
    }
});

gulp.task ('clean-css', function () {
    var destination = options.has ('prod') ? 'dist' : 'src';
    return del ([destination + '/css']);
});

gulp.task ('css', ['clean-css'], function () {
    var destination = options.has ('prod') ? 'dist' : 'src';

    if(options.has('prod')) {
        return gulp.src ('src/scss/fei-theme.scss')
            .pipe (sass ().on ('error', sass.logError))
            .pipe (csscomb ())
            .pipe (autoprefixer ())
            .pipe (gulp.dest (destination + '/css/'));
    }
    else {
        return gulp.src ('src/scss/style-guide.scss')
            .pipe (sass ().on ('error', sass.logError))
            .pipe (csscomb ())
            .pipe (autoprefixer ())
            .pipe (gulp.dest (destination + '/css/'));
    }
});

gulp.task ('watch', ['css'], function () {
    gulp.watch ('src/scss/**/*.scss', ['css']);
});

gulp.task ('build', ['css', 'copy-vendors', 'copy-fonts', 'copy-scss'], function () {
    if (options.has ('prod')) {
        return gulp.src ('dist/css/fei-theme.css')
            .pipe (csso ())
            .pipe (gulp.dest ('dist/css'));
    }
});

gulp.task ('default', ['build']);