# Symfony 5

## Dev environment

Initialize a few directories:

```sh
mkdir -p code/var/cache/dev code/var/log
chmod -R 777 code/var
```

Build the environnement
```
docker-compose build
docker-compose run php composer install
```

Run the web server:

```sh
docker-compose up
```

Then the website is available at `http://localhost:8080`.
