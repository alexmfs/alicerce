// Plugins

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');
var combineMediaQuery  = require('postcss-combine-media-query');
var fontmagician = require('postcss-font-magician');
var pixrem = require('gulp-pixrem');
var browserSync = require('browser-sync').create();
var concat = require('gulp-concat');
var babel = require('gulp-babel');
var uglify = require('gulp-uglify');
var svgSprite = require('gulp-svg-sprite');
var pug = require('gulp-pug');
var gulpCopy = require('gulp-copy');

// Styles
function styles() {
    var processors = [
        autoprefixer
        ,combineMediaQuery
        ,fontmagician
        ,pixrem        
        ,cssnano
    ];
    return gulp
        .src('src/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        // .pipe(postcss(processors))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./dist/_assets'))
        .pipe(browserSync.stream());
}
exports.styles = styles;

// Scripts
function scripts(){
    return gulp
        .src('src/**/*.js')
        // .src('src/_layouts/close.js')
        .pipe(concat('main.js'))
        // .pipe(babel({
        //     presets: ['@babel/env']
        // }))
        // .pipe(uglify())
        .pipe(gulp.dest('./dist/_assets'))
        .pipe(browserSync.stream())
}
exports.scripts = scripts;

// Vendors
function vendors(){
    return gulp
        .src([
            // 'node_modules/jquery/dist/jquery.min.js',
            // 'node_modules/owl-carousel/owl-carousel/owl.carousel.js',
            'src/vendors/*js'
        ])
        .pipe(concat('plugins.js'))
        // .pipe(babel({
        //     presets: ['@babel/env']
        // }))
        // .pipe(uglify())        
        .pipe(gulp.dest('./dist/_assets'))
        .pipe(browserSync.stream())
}
exports.vendors = vendors;

// function copyFonts() {
//     return gulp 
//         .src(['src/_fonts/Icomoon/*'], { "base" : "src/_fonts/" })
//         .pipe(gulp.dest('./dist/_assets/fonts/'));
// }

// exports.copy = copyFonts;

function views() {
    return gulp
        .src([
            'src/views/**/*pug',
            '!src/views/_layouts/*.pug',
            '!src/views/_example/*.pug'
        ])
        .pipe(pug({
            pretty: true
        }))
        .pipe(gulp.dest('./dist/'))
        .pipe(browserSync.stream())
}
exports.views = views;

// Browser Sync
function browser() {
    browserSync.init({
      server: {
        baseDir: "./dist/"
      }
    // para wordpress com Local
    //   proxy: "effortechmulti.local"
    });
}
exports.browser = browser;


// Vigiar modificações
function watch() {
    gulp.watch('src/**/*.scss', styles);
    gulp.watch('src/**/*.js', scripts);
    // gulp.watch('src/**/*.svg', sprites);
    gulp.watch('src/**/*.pug', views);
    gulp.watch(['*.html']).on('change', browserSync.reload);
    // gulp.watch(['*.php','./**/*.php','./**/**/*.php']).on('change', browserSync.reload);
}
exports.watch = watch;

// Tarefa padrão
// exports.default = gulp.parallel(styles)
// exports.default = gulp.parallel(watch, browser, views, scripts, vendors)
// Tarefa padrão
exports.default = gulp.parallel(watch, browser, views, styles, scripts, vendors)