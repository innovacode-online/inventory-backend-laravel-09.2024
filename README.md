<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Inventory


## Pasos de instalaación

1. Ejecutar el comando ``composer install``

2. Crear el contenedor de MySQL mediante Docker

```bash
docker compose up -d
```

3. Renombrar el archivo ``.env.example`` a ``.env`` y reemplazar los valores

4. Ejecutar migraciones.

```bash
php artisan migrate
```

5. Correr el proyecto.
```bash
php artisan serve
```
