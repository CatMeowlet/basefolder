const del = require('del'); // ファイル削除
const DIST = require('./config/main').dist;

/**
 * @method cleanTask
 * ejsタスク
 * @param {any} gulp
 */
module.exports = function cleanTask(gulp) {
  gulp.task('clean', (cb) => {
    return del([
      DIST.css,
      DIST.js,
      DIST.img,
      DIST.font,
      DIST.movie
    ], {
      force: true
    }, cb);
  });
};
