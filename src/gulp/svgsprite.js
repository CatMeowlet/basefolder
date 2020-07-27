const merge = require('merge-stream'); // ストリームマージ
const notifier = require('node-notifier');
const rename = require('gulp-rename'); // ファイル名変更
const plumber = require('gulp-plumber'); // エラーでタスクが強制停止するのを防止
const size = require('gulp-size'); // 変更したファイルのサイズを表示
const watch = require('gulp-watch'); // 新規ファイル監視
const browserSync = require('browser-sync'); // ローカルサーバー
const svgstore = require('gulp-svgstore'); // svgスプライト生成
const svgmin = require('gulp-svgmin'); // svg最適化
const cheerio = require('gulp-cheerio'); // svgやxmlを書き換える svgの余計な記述を削除する。
const template = require('gulp-template'); // svglist.htmlを生成するのに使用
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
    time: 3000,
  });
};

/**
 * @method svgSpriteTask
 * svgスプライト生成タスク
 * @param {any} gulp
 */
module.exports = function svgSpriteTask(gulp) {
  gulp.task('svgsprite', () => {
    const baseDir = SRC.svgsprite;
    // baseDir配下のディレクトリ名を再帰的に取得
    const folders = getFolders(baseDir);
    if (!folders) {
      return gulp.src('./');
    }

    const stream = folders.map((folder) => {
      // svgスプライトの素材対象
      const srcGlob = `${baseDir}/${folder}/*.svg`;
      // サンプルガイドの格納先ディレクトリ
      const templateSrcGlob = `${SRC.doc}/svg/index.html`;
      const templateDestGlob = `${DIST.doc}/svg/${folder}`;

      return gulp.src(srcGlob, {
        base: baseDir
      })
        .pipe(plumber({
          errorHandler: (error) => {
            notify(`svg:${folder}`, error);
          }
        }))
        .pipe(svgmin())
        .pipe(svgstore({
          inlineSvg: true
        }))
        .pipe(cheerio({
          run: ($) => {
            const $svgTag = $('svg');

            // svg画像の属性を抽出($.mapは引数指定が逆)
            const symbols = $svgTag.find('symbol').map((idx, item) => {
              // viewBox内の値を抽出・配列に分割
              const viewBoxArr = $(item).attr('viewBox').match(/\d+/g);
              const symbolObj = {
                id: $(item).attr('id'),
                posX: viewBoxArr[0],
                posY: viewBoxArr[1],
                width: viewBoxArr[2],
                height: viewBoxArr[3]
              };
              return symbolObj;
            }).get();

            // 指定したタグと属性オブジェクトを元にタグのグループ(配列)を生成
            const tagGroupMaker = (tag, callback) => {
              const tagArr = symbols.map((item, idx) => {
                const heightArr = [];
                let reduceHeight = 0;
                if (idx > 0) {
                  let $i = 0;
                  for (; $i < idx; $i++) {
                    heightArr.push(symbols[idx - 1].height);
                  }
                  reduceHeight = heightArr.reduce((prev, current) => {
                    return parseInt(prev, 10) + parseInt(current, 10);
                  });
                }

                const buildTag = $(tag).attr(callback(item, reduceHeight));
                return buildTag;
              });

              return tagArr;
            };

            // useタグの組み立て
            const useTagGroup = tagGroupMaker(
              '<use/>',
              (item, posY) => {
                return {
                  'xlink:href': `#${item.id}`,
                  width: item.width,
                  height: item.height,
                  x: item.posX,
                  // y座標位置の調整(重ならないようにする、余白の設定)
                  y: posY
                };
              }
            );

            // viewタグの組み立て
            const viewTagGroup = tagGroupMaker(
              '<view/>',
              (item, posY) => {
                return {
                  id: `${item.id}_css`,
                  viewBox: `0 ${posY} ${item.width} ${item.height}`
                };
              }
            );

            // svg配下に組み立てたタグを追加
            $svgTag.append(useTagGroup).append(viewTagGroup);

            $svgTag.attr({
              // デフォルトは非表示
              display: 'none',
              // cssからのハッシュリンク読み取りを有効にする設定
              'xmlns:xlink': 'http://www.w3.org/1999/xlink'
            });
            // fill属性をリセット
            $('[fill]').removeAttr('fill');

            // docsファイル作成
            gulp.src(templateSrcGlob)
              .pipe(template({
                inlineSvg: $svgTag,
                symbols,
                spriteName: folder
              }))
              .pipe(rename({
                basename: folder
              }))
              .pipe(gulp.dest(templateDestGlob));
          },
          parserOptions: {
            xmlMode: true
          }
        }))
        .pipe(rename({
          basename: folder
        }))
        .pipe(size({
          showFiles: true
        }))
        .pipe(gulp.dest(DIST.img))
        .pipe(browserSync.stream({ once: true }));
    });

    return merge(stream);
  });
  gulp.task('svgsprite:watch', () => {
    return watch(`${SRC.svgsprite}/**/*.svg`, {
      usePolling: true
    }, () => {
      gulp.start('svgsprite');
    });
  });
};
