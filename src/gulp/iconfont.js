const async = require('async'); // 非同期
const notifier = require('node-notifier');
const iconfont = require('gulp-iconfont');
const consolidate = require('gulp-consolidate'); // 統合テンプレートエンジン
const plumber = require('gulp-plumber'); // エラーでタスクが強制停止するのを防止
const size = require('gulp-size'); // 変更したファイルのサイズを表示
const rename = require('gulp-rename'); // ファイル名変更
const svgmin = require('gulp-svgmin'); // svg最適化
const watch = require('gulp-watch'); // 新規ファイル監視
const getFolders = require('./module/getfolder');
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
 * @method iconfontTask
 * アイコンフォント作成タスク
 * @param {any} gulp
 */
module.exports = function iconfontTask(gulp) {
  // noinspection BadExpressionStatementJS
  gulp.task('iconfont', (done) => {
    const FONT = {
      name: 'myiconfont',
      class: 'if',
      stamp: Math.round(Date.now() / 1000)
    };

    return gulp.src(`${SRC.iconfont}/*.svg`)
      .pipe(plumber(
        {
          errorHandler: (error) => {
            notify('iconfont', error);
          }
        }
      ))
      .pipe(svgmin())
      .pipe(iconfont({
        appendUnicode: false, // recommended option
        centerHorizontally: true,
        // fixedWidth: true,
        fontName: FONT.name,
        // fontHeight: 1000,
        fontWeight: '',
        formats: ['ttf', 'eot', 'woff', 'woff2', 'svg'],
        // prependUnicode: true,
        // startUnicode: 0xF001,
        normalize: true,
        timestamp: FONT.stamp
      }))
      .on('glyphs', function(glyphs/*, options*/) {
        for (var i = 0; i < glyphs.length; i++) {
          glyphs[i].cssEntity = glyphs[i].unicode[0].charCodeAt(0).toString(16).toUpperCase()
        }
        // sassファイル出力
        gulp.src(`${SRC.doc}/iconfont/style.scss`) // テンプレートファイル呼び出し
          .pipe(consolidate('lodash', {
            glyphs,
            fontName: FONT.name,
            fontPath: '/res/fonts/',
            className: FONT.class
          }))
          .pipe(rename({
            basename: `_${FONT.name}`
          }))
          .pipe(gulp.dest(`${SRC.css}/foundation/iconfont`))

        // // Here we pipe our glyphicons to a json data file for jekyll to generate an icon grid in the documentation.
        // gulp.src(docsDir + '_includes/icon-data.json.swig')
        // 	.pipe(consolidate('swig', {
        // 		glyphs: glyphs,
        // 		fontName: 'mage-icons',
        // 		fontPath: '../fonts/',
        // 		className: 'icon'
        // 	}))
        // 	.pipe(rename('icons.json'))
        // 	.pipe(gulp.dest(docsDir + '_data/'));

      })
      .pipe(size({
        showFiles: true
      }))
      .pipe(gulp.dest(DIST.font));

  });

  gulp.task('iconfont:watch', () => {
    return watch(`${SRC.iconfont}/**/*.svg`, {
      usePolling: true
    }, () => {
      gulp.start('iconfont');
    });
  });
};
