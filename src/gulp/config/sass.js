const sassImporter = require('sass-module-importer'); // sassファイルの@importのnode_modulesのパスを省略できる

module.exports = {
  importer: sassImporter(),
  outputStyle: 'compressed',
  precision: 10, // 小数点桁数
};
