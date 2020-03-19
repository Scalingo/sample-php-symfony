# Symfony 5

## Deploying on Scalingo

### Git Push method

Create an app on https://scalingo.com. Then execute the two commands given in the last app creation step:

```
git remote add scalingo git@<app-git-address>.git 
git push scalingo master
```

And that's it! Look at the magic happening.

```
 <-- Start deployment of <app> -->
```

At the end you get:
```
 Build complete, shipping your container...
 Waiting for your application to boot... 
 <-- https://<app-url>.scalingo.io -->
```

Open the link, and here you are, navigating on the deployed application

## Running locally

Initialize a few directories:

```sh
mkdir -p code/var/cache/dev code/var/log
chmod -R 777 code/var
```

Build docker
```
docker-compose build
docker-compose run php composer install
```

Run the web server:

```sh
docker-compose up
```

Then the website is available at `http://localhost:8080`.

