var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
// var watch = require('gulp-watch');

var styleSRC = './assets/style/sass/style.scss';
var styleDIST = './assets/style/';

gulp.task('style', function(done){
	gulp.src( styleSRC )
		.pipe( sourcemaps.init() )
		// .pipe( watch( './assets/style/sass/*.scss' ) )
		.pipe(  sass({
			errorLogToConsole:true,
			outputStyle: 'compressed'
		}) )
		.on ( 'error', console.error.bind(console) )
		.pipe( autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}) )
		.pipe( rename( {suffix: '.min'} ) ) 
		.pipe( sourcemaps.write( './' ) )
		.pipe( gulp.dest( styleDIST ) );
		done();
})
 
