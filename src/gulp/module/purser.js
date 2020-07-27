const minimist = require('minimist'); // コマンドラインパーサー

/**
 * コマンドラインオプションパーサー（環境情報）を取得
 * 開発かリリース作業か切り替える
 * @string: '' or 'production'
 * @param production
 * @default development
 */
const ENV = minimist(process.argv.slice(2), {
  string: ['env'],
  default: {
    env: process.env.NODE_ENV || 'development', // NODE_ENVに指定がなければ開発モードをデフォルトにする
  },
}).env;

// 開発モード・本番モード判定変数 env引数
module.exports = (ENV === 'production');
