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

 -->

 <?php  /* esta es la etiqueta de inicia de cualquier archivo php */