```sh
docker compose up --build -d
```

Get a bash session going:

```sh
docker compose run app bash
```

```sh
cd web/app/themes/sage
composer install
yarn install
yarn build
wp theme activate sage
```