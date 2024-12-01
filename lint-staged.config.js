/** @type {import('lint-staged').Config} */
module.exports = {
  '*.php': [
    'php vendor/bin/parallel-lint app/src app/tests --colors --blame',
    'php vendor/bin/ecs check --fix'
  ],
  'composer.json': [
    'composer normalize --ansi'
  ],
};
