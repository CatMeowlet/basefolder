const notifier = require('node-notifier');
const plumber = require('gulp-plumber'); // エラーでタスクが強制停止するのを防止
const newer = require('gulp-newer'); // 変更したファイルのみ実行する
const size = require('gulp-size'); // 変更したファイルのサイズを表示
const browserSync = require('browser-sync'); // ローカルサーバー
const watch = require('gulp-watch'); // 新規ファイル監視

// path
const SRC = require('./config/main').src;
const DIST = require('./config/main').dist;

/**
 * error notiry
 * @param {*} taskName
 * @param {*} error
 */
const notify = (taskName, error) => {
  const title = `[task]${taskName} ${error.plugin}`;
  const errorMsg = `error: ${error.message}`;
  /* eslint-disable no-console */
  console.error(`${title}\n${error}`);
  notifier.notify({
    title,
    message: errorMsg,
    time: 3000,
  });
};

/**
 * @method copyTask
 * font movie コピータスク
 * @param {any} gulp
 */
module.exports = function copyTask(gulp) {
  gulp.task('copy', () => {
    return gulp.src([
      `${SRC.font}/**/*`,
      `${SRC.movie}/**/*`
    ], { base: SRC.loot })
      .pipe(plumber({
        errorHandler: (error) => {
          notify('copy', error);
        }
      }))
      .pipe(newer(DIST.asset))
      .pipe(gulp.dest(DIST.asset))
      .pipe(size({
        showFiles: true
      }))
      .pipe(browserSync.stream({ once: true }));
  });
  gulp.task('copy:watch', () => {
    return watch([
      `${SRC.font}/**/*`,
      `${SRC.movie}/**/*`
    ], {
      usePolling: true
    }, () => {
      gulp.start('copy');
    });
  });
};
