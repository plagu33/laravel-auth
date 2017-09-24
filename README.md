# laravel-auth

Laravel con autentificación base (php artisan make:auth), se crean seeds y migrations.

configurar tu conección a la base de datos en el archivo .env
composer install (instalamos las dependencias)
php artisan migrate:refresh --seed (instalamos las migraciones y ejecutamos al mismo tiempo los seeds)

Se creara un permiso de Administrador en la tabla roles y un permiso Usuario,
inicialmente se crea un usuario administrador en la tabla users de datos admin@admin.com y contraseña admin.

pd: en el controlador RegisterController.php por defecto los siguientes usuarios que se registren quedan con el rol "Usuario", pero esto es modificable en el mismo controlador.

Y listo!!
