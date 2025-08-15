# Backoffice API

This repository provides a minimal skeleton for a Laravel REST API translated to English. It includes JWT authentication and an OpenAPI specification.

## Setup

1. Install dependencies:
   ```bash
   composer install
   ```
2. Configure the environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   php artisan jwt:secret
   ```
3. Run database migrations:
   ```bash
   php artisan migrate
   ```

## Documentation

The API is documented using OpenAPI. The specification can be found in [`docs/openapi.yaml`](docs/openapi.yaml).
