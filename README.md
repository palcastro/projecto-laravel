Creación de un Blog en Laravel paso por paso:
Este readme se basa en seguir los pasos de un tutorial en inglés de la página de Laracasts de creación de un blog ‘from scratch’ , es decir, desde cero. 
Para empezar, instalamos Laravel utilizando la terminal mediante el comando:
composer create-project laravel/laravel nombre-del-directorio
Dentro de el VSC seguimos todos los pasos del tutorial que conllevan a modificaciones importantes en los contenidos y las rutas del ejercicio. 
En el caso del ejercicio que nosotros hicimos, hubo varios problemas con las rutas respecto al archivo de ‘layout.blade.php’ que después de continuar con el tutorial y gracias a sustitución de líneas de código se fueron solucionando.
Los archivos que más modificaciones tienen en estos pasos son los referentes a los posts y el ‘web.php’
Más tarde, tendremos disponibles todos los archivos referentes al blog y sus entradas más redirecciones a través del Localhost y para su visualización empleamos el comando:
php artisan serve
Procedemos a la creación de la base de datos en terminal y su conexión a través de phpmyadmin
En el fichero .env cambiamos los datos pertinentes que hagan referencia al nombre de la BBDD y el usuario para que se vinculen correctamente
Con respecto a la BBDD poblaremos sus contenidos mediante las migraciones y con el comando ‘php artisan tinker’ iremos introduciendo elementos en las tablas de la BBDD, primero con los usuarios y posteriormente con los post, ya que en uno de los pasos previos nos mandan borrar los contenidos que habíamos creado en la primera parte del tutorial. 

Ejemplo de usuario creado a través de terminal:



El objetivo es seguir con el tutorial hasta tener un blog funcional y completo. 
En los primeros pasos de este tutorial e introduciendo en CDN de Bootstrap el ejercicio se ve de la siguiente manera:


PRIMERA PANTALLA DE CONTENIDOS:





SEGUNDA PANTALLA DE CONTENIDOS: ENTRADA


TERCER PANTALLA DE CONTENIDOS: INICIO CON BBDD




CUARTA PANTALL DE CONTENIDOS: 1ª ENTRADA EN BASE DE DATOS

