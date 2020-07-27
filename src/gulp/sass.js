const notifier = require('node-notifier');
const browserSync = require('browser-sync'); // ローカルサーバー
const plumber = require('gulp-plumber'); // エラーでタスクが強制停止するのを防止
const watch = require('gulp-watch'); // 新規ファイル監視
const size = require('gulp-size'); // 変更したファイルのサイズを表示
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob'); // @importをまとめる アスタリスクが使える。
const sassVariables = require('gulp-sass-variables'); // sassに変数を渡す
const postcss = require('gulp-postcss');
const syntaxScss = require('postcss-scss'); // postcss scss syntax

const SRC = require('./config/main').src;
const DIST = require('./config/main').dist;

/* sass options */
const sassConfig = require('./config/sass');
/* postcss options */
const postcssConfig = require('./config/postcss').build;

const stylelintConfig = require('./config/postcss').lint;

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
 * @method sassTask
 * sassタスク
 * @param {any} gulp
 */
module.exports = function sassTask(gulp) {
  gulp.task('sass', () => {
    return gulp.src(`${SRC.css}/**/*.scss`)
      .pipe(plumber({
		errorHandler: function(error) {
			notify('sass', error);
			this.emit('end');
        }
      }))
      .pipe(sassGlob())
      .pipe(sass(sassConfig)/* .on('error', sass.logError) */)
      .pipe(postcss(postcssConfig))
      .pipe(size({
        showFiles: true
      }))
      .pipe(gulp.dest(DIST.css));
      //.pipe(browserSync.stream({ once: true }));
  });

  /**
   * stylelint task
   */
  gulp.task('sass:lint', () => {
    return gulp.src([`${SRC.css}/**/*.scss`, `!${SRC.css}/foundation/iconfont/_icons.scss`])
      .pipe(plumber({
        errorHandler: (error) => {
          notify('sass:lint', error);
        }
      }))
      .pipe(postcss(stylelintConfig, {
        syntax: syntaxScss
      }));
  });

  // watch
  gulp.task('sass:watch', () => {
    return watch(`${SRC.css}/**/*.scss`, {
      usePolling: true,
    }, () => {
      gulp.start('sass');
    });
  });
};
