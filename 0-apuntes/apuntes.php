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

    comandos 

    composer init
    inicia el asistenete de configuracion
    package name reconoce el composer
    description añadimos una descripcion
    author añadimos nuestro nombre con algun correo
    minimun stability dev podemos decirle en que ambiente estamos
    packatype library decimos que vamos a trabajar
    license MIT es el copyright normal

    seguidamente tenemos que elegir dependencias de produccion buscamos por el nombre carbon

    y veras una lista de dependencias ordenadas en un array basta con escoger una posicion para seleccionar la dependencia
    elegimos la version si queremos la ultima dejamos en blanco
    presionamos enter y se repite el ciclo en depedendencias de desarrollo
    confirmamos el json 
    y terminamos con un no a la pregunta que si queremos instalar mas

    ejecutamos 
    composer install 
    para instalar las depedencias.

    JSON
    es una formato muy ligero y gran desempeño en comunicacion
    AUTOLOAD
    Podemos cargar n cantidad de clases con composer

    con files cargamos archivos con funciones que vamos a utilizar

    classmap cargamos carpetas con clases que se van a utilizar
    
    psr-0 utiliza una estructura, a partir de una carpeta
        debemos escribir las subcarpetas


    psr-4 tenemos casi la misma configuracion, igual de la carpeta, usamos este

    composer dump

    en vendoer se genera la carpeta composer con lo nuestros archivos autoload

    cada vez que tengamos nuestros index.php principal debemos usar el autoload para usar composer correctamente.
    
    comandos composer
    install     cuando tenemos la configuracion en composer
    require     cuando queremos agragar una depednedncia a el composer.json
    remove      desinstala una depedencia

    self-update se actualiza composer
    update  verifica si existe una actualizacion nueva

    composer lock
    No es recomendable eleiminar este archivo y al hacer un proyecto colaborativo verifica en este archivo la version de cada parte de las depedencias para que se tenga el mismo ambiente de desarrollo

    si nos psan un proyecto basta ubicarse en el directorio de nuestro proyecto y ejecutar 
    composer install

    PHPUnit
    sirve como un entorno de pruebas, la configuracions se realiza en el archivo phpunit.xml
    


 -->

 <?php  /* esta es la etiqueta de inicia de cualquier archivo php */