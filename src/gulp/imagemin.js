const notifier = require('node-notifier');
const browserSync = require('browser-sync'); // ローカルサーバー
const plumber = require('gulp-plumber'); // エラーでタスクが強制停止するのを防止
const newer = require('gulp-newer'); // 変更したファイルのみ実行する
const size = require('gulp-size'); // 変更したファイルのサイズを表示
const watch = require('gulp-watch'); // 新規ファイル監視
const imagemin = require('gulp-imagemin'); // 画像最適化
const pngquant = require('imagemin-pngquant'); // png画像最適化
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
 * @method imageMinTask
 * 画像圧縮タスク
 * @param {any} gulp
 */
module.exports = function imageMinTask(gulp) {
  gulp.task('imagemin', () => {
    return gulp.src(`${SRC.img}/**/*`)
      .pipe(plumber({
        errorHandler: (error) => {
          notify('imagemin', error);
        }
      }))
      .pipe(newer(DIST.img))
      .pipe(imagemin([
        pngquant({
          quality: '70-80',
          speed: 1,
          floyd: 0
        }),
        //  mozjpeg({
        //    quality:85,
        //    progressive: true
        //  }),
        imagemin.svgo(),
        imagemin.optipng(),
        imagemin.gifsicle()
      ], {
        verbose: true
      }))
      // .pipe(imagemin({
      //   verbose: true
      // }))
      .pipe(size({
        showFiles: true
      }))
      .pipe(gulp.dest(DIST.img))
      .pipe(browserSync.stream({ once: true }));
  });
  gulp.task('imagemin:watch', () => {
    watch(`${SRC.img}/**/*`, {
      usePolling: true
    }, () => {
      gulp.start('imagemin');
    });
  });
};
