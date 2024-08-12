# Contributing 🤩

Kia ora! Would you like to contribute? That's awesome, thank you so much for your interest in this project!

Before you go committing your amazing contribution please read the following guidelines.

## Getting started 🐤

Here are some things to know before you start coding.

Firstly, build the images.
```sh
docker compose build --no-cache
```

Next, install the dependencies and build the assets.
```sh
docker compose run --rm web yarn install
docker compose run --rm web yarn dev
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

### Using a different port 🚢
If your 80 and 443 ports are currently in use you can specify alternative ports instead, see the example below.
```sh
SS_BASE_URL=https://localhost:4443 HTTP_PORT=8000 HTTPS_PORT=4443 HTTP3_PORT=4443 docker compose up
```

Then visit https://localhost:4443 to view the site.

### Production mode 🚀
The production mode example uses the [worker mode](https://frankenphp.dev/docs/worker/).

> [!CAUTION]
> This has not been tested in a production environment, so use at your discretion.

Here's how you can run the production mode locally.
```sh
docker compose -f compose.yml -f compose.prod.yml build
docker compose up -f compose.yml -f compose.prod.yml up
```

## Coding standards 👮‍♂️

To keep the codebase tidy, use the following script to clean each commit.

```sh
docker compose run --rm composer lint
```

## Commit standards 👮‍♀️

This project uses the [gitmoji config for commitlint](https://www.npmjs.com/package/commitlint-config-gitmoji#structure).

Each commit should adhere to the following structure.

```sh
:gitmoji: type(scope?): subject
body?
footer?
```

## Testing 🧑‍🔬

Be sure to run the test suite regularly. New tests should be added for new features.

```sh
docker compose run --rm web composer test
```

## Making a pull request ✨

This project uses [changesets](https://github.com/changesets/changesets). This tool helps us to streamline our changelog.

When making a pull request, be sure to add a changeset if there has been a change to the project.

```sh
npx changeset
```
