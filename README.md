# Laravel + Docker + PHP 7.3 (with composer) + PostgreSQL starter pack

This is a starter pack to start developing your next $1 Billion app using [Laravel](https://laravel.com/) in just a few minutes.

This starter pack is also suitable for any other PHP project/framework.

**Starter pack includes:**
* nginx
* PHP 7.3
* Composer
* PostgreSQL 12
* Laravel starter code

# Getting started

## Prerequisites

Having `docker` and `docker-compose` installed.

If you are not familiar with `docker` then check out [Set up your Docker environment](https://docs.docker.com/get-started/) article from Docker's official web site.

If you don't have `docker-compose` installed then check out the installation guide from [official web site](https://docs.docker.com/compose/install/).


## Installation

1. Clone the project and bring the containers up:
    ```bash
    git clone laravel-docker-starter-pack && cd laravel-docker-starter-pack
    docker-compose up
    ```
1. install composer packages:
    ```bash
    docker-compose exec -w /var/www/html php composer install
    ```
1. Navigate to [http://localhost:8080](http://localhost:8080)
4. Done!

## Connecting to Postgres

Database created by default and that should be used for your application is `app`.
Username is `docker` and password is `secret`.

To connect to postgres DB from `php` application use `db` as a host name and default port (`5432`).

To connect from the host machine use `localhost` as the host name and port `54321`.

**PS!** Default Laravel code that comes with the starter pack has everything already configured.

## Running `artisan` commands (ex. migrations)

```bash
docker-compose exec -w /var/www/html php php artisan <command>
```

# License
This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
