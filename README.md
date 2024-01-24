```sh
docker compose up --build -d
```

Get a bash session going:

```sh
docker compose run app bash
```

```sh
wp core install --url=http://localhost:8081/ --title=wp-sage-docker --admin_user=admin --admin_password=admin --admin_email=admin@gmail.com --allow-root
wp theme activate sage --allow-root

cd wp-content/themes/sage
composer install
yarn install
yarn build
```

```sh
wp acorn migrate --allow-root
wp acorn db:seed --allow-root
```


```sh
WEB: http://localhost:8081/
Admin: http://localhost:8081/wp-login.php admin/admin
Phpmyadmin: http://localhost:8082/
```

