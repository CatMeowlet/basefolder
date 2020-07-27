const DIST = require('./config/main').dist;
/**
 * @method webFontTask
 * font
 * @param {any} gulp
 */
module.exports = function webFontTask(gulp) {
	gulp.task('fontawesome', () => {
		return gulp.src('./node_modules/font-awesome/fonts/**/*')
			.pipe(gulp.dest(DIST.font));
});
};
