<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


Cómo comenzar:

1. Clonar el repositorio e ir a la consola y colocar el siguiente comando:

```
    composer install
```

2. Cuando se termine de descargar el archivo requirements.txt, entonces ingresaremos a la carpeta con este comando:

```
     php artisan key:generate
```

3. MIGRACIONES
```
     php artisan migrate
```

4. Ejecutamos el siguiente codigo para hacer funcionar el "sembrador"
```
php artisan db:seed --class=PermissionTableSeeder
```
4. Creamos la semilla para el usuario Admin
   ```
   php artisan db:seed --class=CreateAdminUserSeeder
   ```


5. Ejecutamos los siguientes comandos
```
   php artisan make:seed ProductsTableSeeder
```
   
6. Ejecutamos los siguientes comandos
```
npm install
```
6. Ejecutamos los siguientes comandos
```
npm run build
```   

9. Ahora, ejecutaremos el proyecto Laravel con el siguiente comando:

```
    php artisan serve
```


6. Listo, ya podes revisar todo lo que esta implementado en el programa. Se debe abrir el navegador y escribir la siguiente direccion URL para ingresar a la App.

```
http://127.0.0.1:8000/
```
