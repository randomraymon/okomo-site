// modules
var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
// var concat = require('gulp-concat');
// var flattenObject = require('flatten-object');
// var jshint = require('gulp-jshint');
var cleanCSS = require('gulp-clean-css');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

// paths
var paths = {

    src: {
      sass: './src/styles/sass/*.scss',
      partials: './src/styles/sass/**/*.scss',
      js: './src/scripts/js/script.js'

      // js: {
      //     head: [
      //         //'./src/scripts/head.js'
      //     ],
      //     body: [
      //         './node_modules/swiper/dist/js/swiper.min.js',
      //         './src/scripts/body.js'
      //     ],
      //     hint: [
      //         //'./src/scripts/head.js',
      //         './src/scripts/body.js'
      //     ]
      // }
    },

    dist: {
        css: './site/templates/assets/styles/',
        js: './site/templates/assets/scripts/'
    }
};

// convert object to flat array
// var flatArrayFromObject = function(ob) {
//    var array = [];
//
//    for (var i in ob) {
//     if (!ob.hasOwnProperty(i)) continue;
//
//     if ((typeof ob[i]) == 'object') {
//         var flatObject = flattenObject(ob[i]);
//         for (var x in flatObject) {
//         if (!flatObject.hasOwnProperty(x)) continue;
//
//         array.push(flatObject[x]);
//         }
//     } else {
//            array.push(ob[i]);
//
//     }
//    }
//    return array;
// };

// tasks
gulp.task('sass', function() {
    gulp.src(paths.src.sass)
        .pipe(sass({includePaths: ['./src/styles']}).on('error', sass.logError))
        .pipe(autoprefixer())
        // .pipe(cleanCSS({advanced: false}))
        .pipe(gulp.dest(paths.dist.css));
});

gulp.task('js', function() {
    gulp.src(paths.src.js)
        // .pipe(uglify())
        .pipe(gulp.dest(paths.dist.js));
});

// gulp.task('js_hint', function() {
//     gulp.src(paths.src.js.hint)
//         .pipe(jshint())
//         .pipe(jshint.reporter('default'))
// });
//
// gulp.task('js_head', function() {
//     gulp.src(flatArrayFromObject(paths.src.js.head))
//         .pipe(concat('head.js'))
//         .pipe(uglify())
//         .pipe(gulp.dest(paths.dist.js));
// });
//
// gulp.task('js_body', function() {
//     gulp.src(flatArrayFromObject(paths.src.js.body))
//         .pipe(concat('body.js'))
//         .pipe(uglify())
//         .pipe(gulp.dest(paths.dist.js));
// });

// watch files
gulp.task('watch', function () {
  gulp.watch([paths.src.sass, paths.src.partials], ['sass']);
  gulp.watch([paths.src.js], ['js']);
    // gulp.watch(paths.src.js.main, ['js_hint']);
    // gulp.watch(flatArrayFromObject(paths.src.js.head), ['js_head']);
    // gulp.watch(flatArrayFromObject(paths.src.js.body), ['js_body']);
});

// run tasks
// gulp.task('default', ['sass', 'js_hint', 'js_head', 'js_body', 'watch']);
// gulp.task('default', ['sass']);
gulp.task('default', ['sass', 'js']);
