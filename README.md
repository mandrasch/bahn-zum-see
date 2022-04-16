# Bahn zum See

Just a quick learning prototype for kirby using [plain kit](https://github.com/mandrasch/ddev-kirby-plainkit) and [Kirby 3: How to build a website from scratch](https://www.youtube.com/watch?v=QwjX8JAwBws&t=61s). Inspired by [bahn-zum-berg.at](https://www.bahn-zum-berg.at/).

```
ddev start
ddev composer install
ddev exec npm install
ddev exec npm run dev
```

Open: https://bahn-zum-see.ddev.site:3000/ (via https!)

## What was done?

-   `ddev composer require diverently/laravel-mix-kirby` (https://github.com/Diverently/laravel-mix-kirby)
-   `npm init -y`
-   laravel mix (node): `ddev exec npm install laravel-mix --save-dev`
-   `ddev exec npm install bootstrap @popperjs/core --save-dev`
-   add scripts to package.json, change 'development' to 'dev' => https://laravel-mix.com/docs/6.0/upgrade#after (alternative: https://github.com/Diverently/laravel-mix-kirby#npm-scripts)
-   formatting: `ddev exec npm install --save-dev prettier @prettier/plugin-php` (https://github.com/prettier/plugin-php)

-   Run via `ddev exec npm run dev`

<hr>
# DDEV Kirby Plainkit

[Kirby CMS](https://getkirby.com/) meets [DDEV](https://ddev.com/) & [Gitpod](https://gitpod.io/).

**Try out in your browser:**

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/mandrasch/ddev-kirby-plainkit/)

**Local usage:**

Clone to your local laptop and run:

```
ddev start && ddev composer install && ddev launch
```

**About this starterkit**

See https://github.com/getkirby/plainkit for more information.

## How was this created?

**Kirby setup**

Based on ["Installing via composer"](https://getkirby.com/docs/cookbook/setup/composer#installing-composer)-docs.

```bash
ddev config --project-type=php --php-version="8.0"
ddev start
ddev ssh
composer create-project getkirby/plainkit install-folder && \
    echo "Moving installation to root folder ..." && \
    mv install-folder/README.md install-folder/README_kirby.md && \
    cp -Rp install-folder/. /var/www/html && \
    rm -rf install-folder/
exit
ddev composer install
ddev launch
```

**Gitpod & DDEV**

Gitpod DDEV integration was done with helpful tips by [@shaal](https://github.com/shaal). See `.gitpod.yml` and `.gitpod/`-folder.

## Links

-   See https://github.com/mandrasch/ddev-kirby-starterkit as well

## License

Kirby allows free local try outs, but for live sites purchasing a license is required.
[getkirby.com](https://getkirby.com) · [License agreement](https://getkirby.com/license)
