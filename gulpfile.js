const browserSync = require("browser-sync");
const { src, dest, watch } = require("gulp");
const autoprefixer = require("autoprefixer");
const path = require("path");
const LoadPlugins = require("gulp-load-plugins");
const $ = LoadPlugins();
const sass = require("gulp-dart-sass");
const pkg = require("./package.json");
const server = browserSync.create();

function imageChange() {
  let count = 1;
  return src("./images-src/*.jpg")
    .pipe($.imagemin())
    .pipe(
      $.rename((path) => {
        path.basename = "nagayoshi-" + count;
        count++;
      })
    )
    .pipe(dest("./nagayoshi-kougei/images"));
}

function styles() {
  const themeInfo = pkg.theme;
  const comment = `
  /*
  Theme Name: ${themeInfo.name}
  Theme URI: ${themeInfo.uri}
  Description: ${themeInfo.description}
  Version: ${themeInfo.version}
  Author: ${themeInfo.author}
  Author URI: ${themeInfo.authorUri}
  License: ${themeInfo.license}
  License URI: ${themeInfo.licenseUri}
  Text Domain: ${themeInfo.textDomain}
  Domain Path: ${themeInfo.domainPath}
  */
  `;

  return src("./nagayoshi-kougei/styles/style.scss")
    .pipe($.sourcemaps.init())
    .pipe(sass())
    .pipe(
      $.postcss([autoprefixer({ overrideBrowserslist: ["last 2 versions"] })])
    )
    .pipe($.cleanCss())
    .pipe($.header(comment))
    .pipe($.sourcemaps.write("."))
    .pipe(dest("./nagayoshi-kougei/"))
    .pipe(browserSync.stream());
}

function startAppServer() {
  browserSync.init({
    proxy: "http://localhost:8888",
    port: 8887,
    files: ["nagayoshi-kougei/**/*.css"],
    notify: false,
  });

  watch("./nagayoshi-kougei/**/*.scss", styles);
  watch("./nagayoshi-kougei/**/*.php").on("change", browserSync.reload);
}

function jsMinify() {
  return src([
    "./nagayoshi-kougei/scripts/libs/*.js",
    "./nagayoshi-kougei/scripts/*.js",
    "!./nagayoshi-kougei/scripts/libs/*.min.js",
    "!./nagayoshi-kougei/scripts/*.min.js",
  ])
    .pipe($.uglify())
    .pipe(
      $.rename({
        extname: ".min.js",
      })
    )
    .pipe(
      $.if(
        (file) => path.basename(file.path) === "main.min.js",
        dest("./nagayoshi-kougei/scripts"),
        dest("./nagayoshi-kougei/scripts/libs")
      )
    );
}

exports.imageChange = imageChange;
exports.styles = styles;
exports.serve = startAppServer;
exports.javascripts = jsMinify;
