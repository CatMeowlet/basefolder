const path = require('path');
const yargs = require('yargs').argv;
const isProduction = require('../module/purser');
const PROJECT = yargs.project ? yargs.project : 'pc';
const SRC = PROJECT;
// 出力フォルダ
const DIST = isProduction ? 'release/' : '../res';
// 静的ファイルフォルダ名
const ASSET = PROJECT === 'pc' ? '' : PROJECT;

/**
 * ビルド先フォルダ名
 */
const DOC = 'docs'; // ドキュメントフォルダ
const CSS = 'css';
const JS = 'js';
const IMG = 'img';
const FONT = 'fonts';
const MOVIE = 'movies';
console.log(PROJECT, SRC, DIST, ASSET);

module.exports.dist = {
	loot: path.resolve(DIST),
	asset: path.resolve(DIST, ASSET),
	img: path.resolve(DIST, ASSET, IMG),
	font: path.resolve(DIST, ASSET, FONT),
	js: path.resolve(DIST, ASSET, JS),
	movie: path.resolve(DIST, ASSET, MOVIE),
	css: path.resolve(DIST, ASSET, CSS),
	doc: path.resolve(DIST, DOC)
};

module.exports.src = {
	loot: path.resolve(SRC),
	img: path.resolve(SRC, 'img'),
	font: path.resolve(SRC, 'fonts'),
	js: path.resolve(SRC, 'js'),
	movie: path.resolve(SRC, 'movies'),
	css: path.resolve(SRC, 'css'),
	svgsprite: path.resolve(SRC, 'svgsprite'),
	iconfont: path.resolve(SRC, "iconfont"),
	doc: path.resolve(SRC, 'docs')
};

module.exports.dir = {
	project: PROJECT,
	asset: ASSET,
	img: IMG,
	font: FONT,
	js: JS,
	movie: MOVIE,
	css: CSS,
	doc: DOC
};
