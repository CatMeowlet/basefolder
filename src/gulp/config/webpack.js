const path = require('path');
const glob = require('glob');
const webpack = require('webpack');
const uglifySaveLicense = require('uglify-save-license');
const SRC = require('./main').src;
const DIST = require('./main').dist;
const isProduction = require('../module/purser');

/**
 * webpack エントリー生成
 * [_]のつかないファイルを抽出し、エントリーポイントに追加する。
 * venderディレクトリは除外
 */
const entries = {};
const chunks = [];
glob.sync(`${SRC.js}/**/!(_)*.js`, { ignore: [`${SRC.js}/vendor/**/*.js`, `${SRC.js}/common/*.js`] }).map((file) => {
	chunks.push(path.basename(file, path.extname(file)));
	// {key:value}のObject（連想配列形式）を生成
	entries[path.basename(file, path.extname(file))] = file;
	return true;
});

/**
 * common
 */
const common = [
	...glob.sync(`${SRC.js}/common/*.js`)
];
if (common.length > 0) {
	entries.common = common;
	chunks.push('common');
}

/**
 * vendor
 * npmインストールしたものはパッケージ名を記述
 * npmにないものはjs/vendorの中に格納する
 */
entries.vendor = [
	'picturefill',
	'svgxuse',
	'jquery',
	'moment',
	'slick-carousel',
	'magnific-popup',
	'jquery-smooth-scroll',
	...glob.sync(`${SRC.js}/vendor/*.js`), // js/vendorの中のものを取得
];

/**
 * webpack設定
 */
const webpackConfig = {
	cache: true,
	devtool: 'source-map',
	entry: entries,
	output: {
		filename: '[name].bundle.js', // [name], [hash]
		path: `${DIST.js}`,
	},
	resolve: {
		modules: [
			'node_modules',
			SRC.js,
		],
		extensions: ['.js', '.json']
	},
	module: {
		rules: [
			{
				exclude: /node_modules/,
				test: /\.js$/,
				use: [
					{
						loader: 'babel-loader',
						options: {}
					},
				],
			},
			{
				test: require.resolve('jquery'),
				use: [{
					loader: 'expose-loader',
					options: 'jQuery'
				},
					{
						loader: 'expose-loader',
						options: '$'
					}],
			},
		],
	},
	plugins: [
		new webpack.optimize.CommonsChunkPlugin({
			name: 'vendor',
			filename: '[name].bundle.js', // [hash]
			[chunks]: chunks,
			minChunks: Infinity, // Infinityを指定すると、エントリーポイントに記述したモジュール以外はバンドルされない
		}),
		new webpack.optimize.UglifyJsPlugin({
			output: { comments: uglifySaveLicense },
			compress: {
				warnings: false
			}
			// sourceMap: true
		}),
		new webpack.ProvidePlugin({
			$: 'jquery',
			jQuery: 'jquery'
		})
	],
	externals: {
		window: 'window',
		document: 'document'
	},
};

if (Object.keys(entries).length === 0) {
	module.exports = false;
} else {
	module.exports = webpackConfig;
}

