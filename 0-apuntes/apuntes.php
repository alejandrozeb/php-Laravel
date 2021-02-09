<!-- 
    debemos tener instalado
    VStudio code o algun ide
    wamp o xamp
    composer
    https://getcomposer.org/download/
    descargamos el instalador y lo ejecutamos, al redireecion la version debe apuntar a un php mayo 7.3 por algunas caracteriticas propias que usa composer.
    --------------composer----------------
    podemos descargar paquetes como hace package.json en nodejs, nos permiter tener un mejor uso de los packetes en php
    {
    "name": "italomorales/text",
    "autoload":{
        "psr-4":{
            "Text\\": "src/"    //apunta a nuestra carpeta src donde se aloja nuestra app
        },
        "files": [
            "src/helpers.php" //carga los archivos necesarios para correr el programa
        ]
    }
}
    composer es lo que npm es para nodejs, es un manejador de paquetes que da vida a php

    composer nos ayuda a encontrar los repositorios de los packetes o depedencias que necesitamos
    https://getcomposer.org/
    lista de comandos
    https://packagist.org/
    puedes buscar las dependencias aqui

    nos da el comando exacto que quermos descargar.
    ademas podemos ver el github de cada repositorio

    tambien esta laravel como framework

    instalaicion de dependencia de desarrollo
    composer require --dev phpunit/phpunit
    instalacion de dependencia de produccion
    composer require nesbot/carbon
    podemos ver en composer.json la diferencia entre dev y produccion

    garantizamos que la gestion de paquetes se realice de manera correcta

 -->

 <?php  /* esta es la etiqueta de inicia de cualquier archivo php */