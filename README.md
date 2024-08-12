# Silverstripe Website | Pae Tukutuku Ponga
A personal [Silverstripe](https://docs.silverstripe.org/en/5/) website boilerplate, served by [FrankenPHP](https://frankenphp.dev/).

## What's included? 🤔

### Asset bundler
- [Laravel Mix](https://laravel-mix.com/)

### Coding standards
- [Easy Coding Standard](https://github.com/easy-coding-standard/easy-coding-standard)
- [PHP Parallel Lint](https://github.com/php-parallel-lint/PHP-Parallel-Lint)
- [PHPStan](https://phpstan.org/)
- [Rector](https://getrector.com/)

### Continuous integration
- [Github Actions](https://github.com/features/actions)

### CSS
- [Tailwind](https://https://tailwindcss.com/)

### Developer environment
- [Docker](https://docs.docker.com/get-docker/)
- [FrankenPHP](https://frankenphp.dev/)

### Quality tools
- [Changesets](https://github.com/changesets/changesets)
- [Commitlint](https://commitlint.js.org/)
- [Husky](https://typicode.github.io/husky/)
- [Lint Staged](https://github.com/lint-staged/lint-staged)

### Testing
- [PHPUnit](https://phpunit.de/index.html)

## Prerequisites 🦺
This demo uses [Docker](https://docs.docker.com/get-docker/) so ensure you have it installed first.

## Getting started 🐤

Once you have cloned this repo or used the 'create template' function check the [contributing guide](./CONTRIBUTING.md#getting-started-🐤). This guide will contain useful information about the developer tools that are provided.

Once you have set everything up, feel free to modify this template as you please.

### Building the environment 🐳

Firstly, build the images.
```sh
docker compose build --no-cache
```

Next, install the dependencies and build the assets.
```sh
docker compose run --rm web yarn install
docker compose run --rm web yarn build
docker compose run --rm web composer install
```

Then build the database.
```sh
docker compose run --rm web sake dev/build
```

Now you can run the site, it should be accessible at https://localhost.
```sh
docker compose up
```

Once you are done be sure the stop the running containers by using the following command.
```sh
docker compose down --remove-orphans
```

## Using a different port 🚢
If your 80 and 443 ports are currently in use you can specify alternative ports instead, see the example below.
```sh
SS_BASE_URL=https://localhost:4443 HTTP_PORT=8000 HTTPS_PORT=4443 HTTP3_PORT=4443 docker compose up
```

Then visit https://localhost:4443 to view the site.

## Production mode 🚀
The production mode example uses the [worker mode](https://frankenphp.dev/docs/worker/).

> [!CAUTION]
> This has not been tested in a production environment, so use at your discretion.

Here's how you can run the production mode locally.
```sh
docker compose -f compose.yml -f compose.prod.yml build
docker compose up -f compose.yml -f compose.prod.yml up
```
