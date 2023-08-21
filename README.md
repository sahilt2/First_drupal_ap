### Initialize locally

- Composer

```shell
lando composer create-project drupal/recommended-project:10.0.x-dev@dev tmp && cp -r tmp/. . && rm -rf tmp

```

- Start

```shell
lando start
```

- Install a site local drush

```shell
lando composer require drush/drush
```

- Install drupal

```shell
lando drush site:install --db-url=mysql://drupal10:drupal10@database/drupal10 -y
```
