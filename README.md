# ADOC

## _Backend Creado para la prueba_

Se muestra un backend de tipo API desarrollado en Laravel.

## Pasos

-   Copia el archivo **.env.example** y renombralo **.env**
-   Configura los parametros para la conexión a la base de datos
-   Crea la base de datos con el nombre que le diste
-   Ejecuta el siguiente comando:

```sh
composer install
```

-   Ejecuta el siguiente comando:

```sh
php artisan key:generate
```

-   Ejecuta el siguiente comando:

```sh
php artisan migrate --seed
```

-   Ejecuta el siguiente comando para que el servicio salga en tu IP y en el puerto que desees:

```sh
php artisan serve --host=0.0.0.0 --port=8002
```
