/* postcss options */
const cssnext = require('postcss-cssnext'); // autoprefixerなど
// const doiuse = require('doiuse'); // 対象ブラウザチェック
const cssReporter = require('postcss-reporter'); // PostCSSプラグインのアウトプット表示
const mqpacker = require('css-mqpacker'); // media query 結合
const normalize = require('postcss-normalize'); // normalize.css
const stylelint = require('stylelint'); // css文法チェック
const flexbug = require('postcss-flexbugs-fixes'); // css文法チェック

module.exports.build = [
  normalize(),
  flexbug(),
  cssnext({
    features: {
      customProperties: true,
      calc: true,
      customMedia: true,
      mediaQueriesRange: true,
    },
  }),
  // doiuse({
  //   browsers: require('../package.json').browsers,
  //   ignore: ['rem'],
  //   ignoreFiles: ['**/normalize.css'],
  //   onFeatureUsage: function (usageInfo) {
  //     console.log(usageInfo.message);
  //   }
  // }),
  cssReporter({
    clearMessages: true,
    clearReportedMessages: true,
    throwError: false,
  }),
  mqpacker({
    sort: true,
  }),
];

module.exports.lint = [
  stylelint(),
  cssReporter({
    clearMessages: true,
    clearReportedMessages: true,
    throwError: false,
  }),
];
