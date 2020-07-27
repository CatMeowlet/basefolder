/**
 * @method watchTask
 * ejsタスク
 * @param {any} gulp
 */
module.exports = function watchTask(gulp) {
  gulp.task('watch', ['webpack:watch', 'sass:watch', 'imagemin:watch']);
};

