# Taller de Ingeniería de Software INFO264

## Integrantes
* Jorge Sebastian Obando Guerrero
* Elliot Andres Ide Pozo
* Marco Alexis Araya Epuyao

## Descripción del proyecto
El proyecto trata de la creacion de una plataforma para un estudio juridico (grupo de abogados) para facilitarles la gestion de los casos en los cuales trabajen. Incluye:
- Landing page
- Login para acceso administrativo (dashboard).
- Contacto (vía landing) y visualización vía dashboard.
- Registro de clientes.
- Creación de causas y registro de documentos.

## Consideraciones en la ejecución (*)

El proyecto está basado en Laravel 5.5, por lo que se requiere la instalación de la pila LAMP para su funcionamiento.
Originalmente se trabajó con Ubuntu 18.04, sin embargo es posible  su ejecución (evaluada en 2021) mediante Windows 10, utilizando WSL y Docker como ambiente de desarrollo, requiriendo la instalación de: composer, php7.4-curl, php-mbstring, php-xml, php-zip, php-mysql, phpmyadmin y mysql-server.

Una vez configurado el usuario de mysql, este debe especificarse en un archivo de configuración con el nombre .env, de forma similar al ejemplo incluido (.env.example).

**SOLO** para la primera ejecución se deben ejecutar los siguientes comandos:
- composer install
- composer update (de ser requerido)
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

Para las posteriores ejecuciones en desarrollo basta con php artisan serve.




