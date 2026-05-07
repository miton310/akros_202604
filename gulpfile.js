const gulp = require("gulp");
const notify = require("gulp-notify"); // エラー通知
const plumber = require("gulp-plumber"); // エラー時のタスク停止防止
const debug = require("gulp-debug"); // ログ表示
const dartSass = require("gulp-dart-sass");
const autoprefixer = require("gulp-autoprefixer"); // ベンダープレフィックス付与
const sourcemaps = require("gulp-sourcemaps"); // ソースマップ出力
const cached = require("gulp-cached"); // ファイルキャッシュ

const paths = {
  scss: {
    src: "akros-child/scss/**/*.scss", // コンパイル対象
    dest: "akros-child/css/", // 出力先
  },
};

/**
 * scssタスクで実行する関数
 */
function scss() {
  return (
    gulp
      .src(paths.scss.src)
      .pipe(
        plumber({
          errorHandler: notify.onError("Error: <%= error.message %>"),
        })
      )

      // 処理中のファイル名が表示
      .pipe(
        require("through2").obj((file, enc, callback) => {
          console.log("file:", file.path);
          return callback(null, file);
        })
      )
      .pipe(cached("scss")) // ファイルをキャッシュ
      .pipe(sourcemaps.init())
      .pipe(
        dartSass({
          outputStyle: "compressed", // expanded
        })
      )
      .pipe(
        autoprefixer({
          cascade: true,
        })
      )
      .pipe(sourcemaps.write("/maps"))
      .pipe(gulp.dest(paths.scss.dest))
      .pipe(debug({ title: "scss dest:" }))
  );
}

/**
 * scssファイルをキャッシュする関数
 */
function scssCache() {
  return gulp
    .src(paths.scss.src)
    .pipe(cached("scss")) // ファイルをキャッシュさせる
    .pipe(debug({ title: "scss cached:" }));
}

/**
 * watchタスクで実行する関数
 */
function watch() {
  return gulp.watch(paths.scss.src, gulp.series(scss));
}

exports.scss = scss; // scssタスク
exports.watch = gulp.series(scssCache, watch); // watchタスク
exports.default = gulp.series(scss); // defaultタスク

// const gulp = require('gulp');
const webpChange = require("gulp-webp");
const rename = require("gulp-rename");

function webp() {
  return (
    gulp
      .src("akros-child/images/webp/**/*.{jpg,jpeg,png}") // srcディレクトリのimageファイル
      // rename処理を追加
      .pipe(
        rename(function (path) {
          path.basename += path.extname;
        })
      )
      .pipe(
        webpChange({
          // オプションを追加
          // quality: 70,
          // method: 6, // defoultは4
        })
      )
      .pipe(gulp.dest("akros-child/images/"))
  ); // distディレクトのimage.webpファイル
}
exports.webp = webp; // webpタスク
