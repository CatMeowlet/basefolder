// load modules
const gulp = require('gulp');
// utiliti
// gulpIf = require('gulp-if'); // 条件分岐

// 環境判定
// const isProduction = require('./config/purser');

// tasks
require('./gulp/build')(gulp);
require('./gulp/watch')(gulp);
require('./gulp/clean')(gulp);
require('./gulp/server')(gulp);
require('./gulp/sass')(gulp);
require('./gulp/webpack')(gulp);
require('./gulp/imagemin')(gulp);
require('./gulp/copy')(gulp);
require('./gulp/webfont')(gulp);
require('./gulp/svgsprite')(gulp);
require('./gulp/iconfont')(gulp);

/**
 * default task
 */
gulp.task('default', ['server', 'watch']);
