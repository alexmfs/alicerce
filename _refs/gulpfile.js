var gulp = require('gulp');
var gutil = require('gulp-util');
var watch = require('gulp-watch');
var cmq = require('gulp-combine-media-queries');

var postcss = require('gulp-postcss');
var less = require('gulp-less');

// var uglify = require('gulp-uglify');
 
// var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');
var fontmagician = require('postcss-font-magician');
var pixrem = require('gulp-pixrem');
// var cssnext = require("postcss-cssnext")
 
gulp.task('css', function () {
    var processors = [
        fontmagician
        ,pixrem
        // ,cssnext
        // ,cssnano
    ];
    return gulp.src('./src/style.less')
        .pipe(less())
        .pipe(cmq())
        .pipe(postcss(processors))
        .pipe(gulp.dest('./dest/'));
});


gulp.task('default', function() {
    // corpo da tarefa 
    gulp.watch(['./src/*.less','./src/**/*.less'], function(event) {
        gutil.log('File '+event.path+' was '+event.type+', running tasks...');
        gulp.run('css');
    });
});
