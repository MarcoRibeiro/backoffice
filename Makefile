.PHONY: up down build test install

up:
	 docker compose up -d

down:
	 docker compose down

build:
	 docker compose build

test:
	 docker compose run --rm app php artisan test

install:
	 docker compose run --rm app composer install
