```sh
docker compose up --build -d
```

Get a bash session going:

```sh
docker compose run app bash
```

```sh
cd wp-content/themes/sage
composer install
yarn install
yarn build
wp theme activate sage
```

```sh
wp acorn migrate --allow-root
wp acorn db:seed --allow-root
```

wp acorn make:model scheduleResult --allow-root
wp acorn make:controller  scheduleResultController  --resource --allow-root
wp acorn make:model SClass --allow-root
wp acorn make:controller  SClassController  --resource --allow-root
wp acorn make:model Team --allow-root
wp acorn make:controller  TeamController  --resource --allow-root