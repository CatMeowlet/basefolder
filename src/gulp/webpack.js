const notifier = require('node-notifier');
const browserSync = require('browser-sync'); // ローカルサーバー
const plumber = require('gulp-plumber'); // エラーでタスクが強制停止するのを防止
const watch = require('gulp-watch'); // 新規ファイル監視
const eslint = require('gulp-eslint'); // js文法チェック
const webpack = require('webpack');
const webpackStream = require('webpack-stream'); // webpackのgulp用プラグイン
const webpackConfig = require('./config/webpack');

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
    time: 3000
  });
};

/**
 * @method webpackTask
 * webpackタスク
 * @param {any} gulp
 */
module.exports = function webpackTask(gulp) {
  // jsのlint処理
  gulp.task('js:lint', () => {
    return gulp.src([`${SRC.js}/**/*.js`, `!${SRC.js}/vendor/*.js`])
      .pipe(plumber({
        errorHandler: (error) => {
          notify('lint', error);
        }
      }))
      .pipe(eslint({
        useEslintrc: true
      }))
      .pipe(eslint.format());
    // .pipe(eslint.failOnError())
    // .pipe(plumber.stop());
  });

  /**
   * webpack task
   */
  gulp.task('webpack', ['js:lint'], () => {
    return webpackStream(webpackConfig, webpack)
      .on('error', function handleError() {
        this.emit('end'); // Recover from errors
      })
      .pipe(gulp.dest(DIST.js))
      .pipe(browserSync.stream({ once: true }));
  });
  /**
   * webpack watch
   */
  gulp.task('webpack:watch', () => {
    return watch(`${SRC.js}/**/*.js`, {
      usePolling: true
    }, () => {
      gulp.start('webpack');
    });
  });
};
