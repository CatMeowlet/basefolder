const runSequence = require('run-sequence'); // 並列・直列処理
/**
 * @method buildTask
 * ejsタスク
 * @param {any} gulp
 */
module.exports = function buildTask(gulp) {
  gulp.task('build', (cb) => {
    runSequence('clean', 'iconfont', ['copy', 'sass', 'webpack', 'imagemin'], cb);
  });
};
