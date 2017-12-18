var gulp			= require('gulp');
var filter			= require('gulp-filter');
var rev				= require('gulp-rev');
var revReplace		= require('gulp-rev-replace');
var useref			= require('gulp-useref');
var html			= require('gulp-htmlmin');
var js				= require('gulp-uglify');
var css				= require('gulp-csso');
var autoprefixer	= require('gulp-autoprefixer');
var sass			= require('gulp-sass');
var watchSass		= require('gulp-watch-sass');
var image			= require('gulp-imagemin');
var del				= require('del');
var run				= require('run-sequence');
var ftp				= require('vinyl-ftp');

var conf  = require('./conf.json');

gulp.task("mangle", ["concat"], function() {
	var revFilter = filter(['**/*.css', '**/*.js'], {restore: true});
	var cssFilter = filter('**/*.css', {restore: true});
	var jsFilter = filter('**/*.js', {restore: true});
	var htmlFilter = filter('**/*.html', {restore: true});

	return gulp.src(['temp/**/*.js', 'temp/**/*.css', 'temp/**/*.html', 'temp/**/*.php', '**/.+(htpasswd|htaccess)', '*White_Paper*.pdf', '!dist/**/*.*', '!node_modules/**/*.*'])
		// Minify
		.pipe(cssFilter)
		.pipe(css())
		.pipe(cssFilter.restore)
		.pipe(jsFilter)
		.pipe(js())
		.pipe(jsFilter.restore)
		.pipe(htmlFilter)
		.pipe(html({collapseWhitespace: true}))
		.pipe(htmlFilter.restore)
		// Revision files
		.pipe(revFilter)
		.pipe(rev())
		.pipe(revFilter.restore)
		.pipe(revReplace({replaceInExtensions: ['.js', '.css', '.html', '.php']}))
		// Send it
		.pipe(gulp.dest('dist'));
});

gulp.task("concat", ['css'], function() {
	return gulp.src(['**/*.html', '**/*.php', '!node_modules/**/*.*'])
		.pipe(useref())
		.pipe(gulp.dest('temp'));
});

gulp.task("css", ['sass'], function() {
	return gulp.src('assets/css/**/*.css')
		.pipe(autoprefixer())
		.pipe(gulp.dest('assets/css/'));
});

gulp.task("sass", ["modules"], function () {
	return gulp.src('assets/scss/**/*.scss')
		.pipe(sass())
		.pipe(gulp.dest('assets/css/'));
});

gulp.task("modules", function() {
	var js = filter(['**/*.js'], {restore: true});
	var css = filter(['**/*.css']);

	return gulp.src(['node_modules/bootstrap/dist/css/bootstrap.min.css', 'node_modules/bootstrap/dist/js/bootstrap.min.js'])
		.pipe(js)
		.pipe(gulp.dest('assets/js/libs'))
		.pipe(js.restore)
		.pipe(css)
		.pipe(gulp.dest('assets/css/libs'));
});

gulp.task("images", function() {
	return gulp.src(['assets/images/**/*.*'])
		.pipe(image())
		.pipe(gulp.dest('dist/assets/images/'));
});

gulp.task("fonts", function() {
	return gulp.src(['assets/fonts/**/*.*'])
		.pipe(gulp.dest('dist/assets/fonts/'));
});

gulp.task("sass:watch", ['sass'], function(){
	watchSass([
		'assets/scss/**/*.scss'
	])
		.pipe(sass())
		.pipe(gulp.dest("assets/css"));
});

gulp.task("clean", function() {
	return del(['dist/', 'assets/css/', 'assets/js/libs/bootstrap.min.js', 'temp/']);
});

gulp.task("clean:post-deploy", function() {
	return del(['temp/']);
});

gulp.task("build", ['clean'],  function() {
	return run(['mangle', 'images', 'fonts'], 'clean:post-deploy');
});

gulp.task("build:deploy", function() {
	return run(['mangle', 'images', 'fonts'], 'clean:post-deploy', 'deploy');
});

gulp.task("deploy", function() {
	var conn = ftp.create({
		host: conf.ftp.host,
		user: conf.ftp.user,
		password: conf.ftp.password,
		log: console.log
	});

	return gulp.src('dist/**/*.*', { buffer: false })
		.pipe(conn.newerOrDifferentSize(conf.ftp.remoteDir))
		.pipe(conn.dest(conf.ftp.remoteDir));
});

gulp.task("deploy:test", function() {
	var conn = ftp.create({
		host: conf.ftp.host,
		user: conf.ftp.user,
		password: conf.ftp.password,
		log: console.log
	});

	console.log(conf.ftp, conf.ftp.host);

	return gulp.src('dist/**/*.*')
		.pipe(conn.newerOrDifferentSize(conf.ftp.remoteDir))
		.pipe(conn.filter(conf.ftp.remoteDir, function(localFile, remoteFile, cb) {
			console.log('Local File: ', localFile, 'Remote File: ', remoteFile.ftp.name);
			cb(null, null);
		}));
});
