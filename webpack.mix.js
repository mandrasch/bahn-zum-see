let mix = require("laravel-mix");

// this is the default for diverently/laravel-mix, if you change it
// make sure you read the docs and edit your kirby config accordingly
// https://getkirby.com/plugins/diverently/laravel-mix
mix.setPublicPath("assets");

// TODO: configure this dynamically for pipelines via node env!
mix.browserSync({
  // https://github.com/tyler36/ddev-browsersync#laravel-mix-example
  // TODO: cli output is wrong, we need to open https(!)
  // --> https://bahn-zum-see.ddev.site:3000 (not https)
  proxy: "bahn-zum-see.ddev.site",
  host: "bahn-zum-see.ddev.site",
  open: false,
  // watch php, txt and compiled output folder for reloads
  files: ["site/", "assets/", "content/"],
});
if (mix.inProduction()) {
  mix.version();
}
mix.sourceMaps().js("src/js/main.js", "").sass("src/scss/main.scss", "");
