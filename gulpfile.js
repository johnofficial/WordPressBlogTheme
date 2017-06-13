/*
Requirements
*/
var gulp 			= require('gulp');
var autoprefixer	= require('gulp-autoprefixer');
var sass 			= require('gulp-sass');
var browserSync		= require('browser-sync');
var reload 			= browserSync.reload;


gulp.task('server', function(){
	browserSync.init({
		proxy: "localhost/online-kuvar"
	});
});

gulp.task('autoprefix', function() {
	return gulp.src('assets/css/style.css')
	.pipe(autoprefixer({
		browsers: ['last 12 versions']
	}))
	.pipe(gulp.dest('assets/css'));
});

gulp.task('sass', function(){
	return gulp.src('sass/style.sass')
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(gulp.dest('assets/css'));
});

gulp.task('default',['server'], function(){
	gulp.watch('./sass/**/*.sass', ['sass']);
	gulp.watch('..assets/css/style.css', ['autoprefix']);
	gulp.watch('./sass/**/**/*.sass').on('change', reload);
	gulp.watch('*.php').on('change', reload);
});
