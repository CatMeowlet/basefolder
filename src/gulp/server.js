const browserSync = require('browser-sync'); // ローカルサーバー
const serverConfig = require('./config/server');
/**
 * @method serverTask
 * ejsタスク
 * @param {any} gulp
 */
module.exports = function serverTask(gulp) {
  gulp.task('server', () => {
    browserSync.init(serverConfig);
  });
  // サーバ再起動
  gulp.task('server:reload', () => {
    browserSync.reload();
  });
};
