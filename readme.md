<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca del código

Laravel, sin embargo, trae consigo un potente herramienta que permite manejar de una manera muy fácil estos procedimientos e incluso permite integrar nuestro proyecto con sistemas de almacenamiento no sólo locales sino otros en la nube como Amazon S3 y Rackspace.
Laravel, sin embargo, trae consigo un potente herramienta que permite manejar de una manera muy fácil estos procedimientos e incluso permite integrar nuestro proyecto con sistemas de almacenamiento no sólo locales sino otros en la nube como Amazon S3 y Rackspace.

## Configurando el sistema de archivos

Ingresamos config/filesystems.php y  definimos en donde queremos almacenar los archivos a subir, usaremos una carpeta llamada storage dentro del directorio publico de la app.


'local' => [

'driver' => 'local',

'root' => public_path().'/storage',

],


## Enviando archivos desde un formulario

Para este ejemplo crearemos un controlador llamado StorageController 

una vez que tengamos el controlador debemos crear una ruta para acceder al formulario en el archivo routes.php

y una vista para el formulario llamada welcome.blade.php

Es muy importante incluir el atributo enctype=”multipart/form-data” en todos los formularios que incluyan campos de tipo file y recuerda cambiar el action para que apunte a la URL de tu proyecto local.

## Obteniendo archivos almacenados

Hay una ruta /download/{archivo} para descargar archivos subidos 

Hay una ruta /listar para listar los archivos de un directorio

## Funciones adicionales

Laravel nos ofrece algunas funciones adicionales para el manejo de archivos que pueden ser de gran utilidad

Eliminar uno o mas archivos

Storage::delete('file.jpg');
Storage::delete(['file1.jpg', 'file2.jpg']);


copiar archivos a un nuevo directorio

Storage::copy('old/file1.jpg', 'new/file1.jpg');


Mover archivos a un nuevo directorio

Storage::move('old/file1.jpg', 'new/file1.jpg');


Para más información: https://laravel.com/docs/5.8/filesystem





