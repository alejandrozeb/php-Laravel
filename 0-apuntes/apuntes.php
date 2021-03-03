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
    
    POO
    es un paradagmi de programacion con un enfoque de flujo de datos.

    Deuda tecnica------------------------------------
    Esto genera Re-trabajo, creando codigo que funcona pero que esta mal programado y en cualquier momento puede fallar, para reducir el impacto debemos programar mejor.
    Dejamos cosas para despues y los errores pueden llegar despues de meses.
    - necesitamos programar con pruebas unittest
    - documentar el codigo
    - refactorizar el codigo sin afectar el resultado
    Una deuda tecnica se paga casi siempre al final y puede ocasionar reiniciar el proyecto desde 0

    CODESMELL--------
    Hace referencia al mal olor del codigo, hace que pierdas el apetito o te hace mal.
    Pero esto como se reproduce en el codigo es cunaod copiamos codigo de un modulo a otro, tambien puede venir por parte del orden o de la arquitectura.
    Cuando intentamos crear soluciones a partir de otra,
    Un ejemplo sera copiar modulos y cambiar un nombre ademas de hacerlo en un solo nivel de abstraccion tambien generamos duplicidad en el codigo que funciona pero apesta.
    otra caracteristica es que el codigo es horrible de mantener ademas significa que no estamos programando bien.
    Como evitarlo
    Clean code o con codigo limpio con programaacion estructurada con clases y otros paradigmas.

    CODIGO ESPAGUETI--------------------------------------
    Hace referencia a unplato de espagueti todo esta ahi e imagina sacar todo eso.
    AL realizar programacion estructurada corremos el reisgo de hacer este tipo de codigo pero la POO viene a resolver este problema.
    El codigo espagueti significa que tod esta con if o ciclos con bloques de codigo centrandonos en resolver un problema. 
    Resolver el problema y luego refactorizar.
    Refactorizar nos vuelve mejroes programadores.
    algunos problemas es delegar tareas importantes y ejecutarlas con un solo un if.
    El mantenimiendo es muy importante nuestro codigo debe trabajar por 5 o 10 años.
    Crea clases que nos permitan modificar pequeños bloqyues de codigo.
    Escribir buen codigo es partir de la experiencia.
    en resumen
    Refactoriza
    Debemos reemplazar los bloques de codigo con metodos.
    Inclusion de archivos-----------------------------
    Include nos permite incluir un archivo dentro de otro
    Require hace lo mismo pero nos exige o el codigo no avanzara en su ejecucion
    Require once lo mismo que el require pero solo lo permite una vez si se invoca varias veces sale un error
    -----------Poo-------------------------
    Las clases son moldes.
    Las clases tiene metodos y el enfoque es ver todo como objetos.
    Creamos clases y a partir de estas creamos objetos claro que tienen caracteristicas especiales.
    tiene signos o plabras reservadas para la instancia y creacion de objetos.
    --------------abstraccion---------
    Significa aislar o separar por partes los objetos que queramos llevar a codigo:
    ej mesa tiene madera, patas, tamaño,altura, peso -...
    -----------------Alcance------------------------
    es cunado definimos la integridad del usuaria
    como password.
    -----------------Modularidad------------------
    Facilita el mantenimiento debemos ensar que los programs deben estar en archivos separados no en uno solo.
    aplica a vista,modulos,controladores.
    SOn pequeñas piezas de codigo que unidan dan vida a todo el sistema deesarrollado.
    USer debe tener todo con user
    Post igualmento solo post
    El objetico es que en el futuro podamos entender nuestrocodigo.
    Debemos crear un modulo en cada capa.
    Si usamos mudularidad podemos mas facil aplicar pruebas.
    Crear cada modulo como una pieza aislada.
    -----------Polimorfismo--------------------
    Es la caracteristica de POO.
    significa que un elemento puede comportarse de diferentes formas.
    
    en una bd comentarios de producto y usuario, tabla poliformica

    si se comporta de diferentes formas un elemento se dice que es polimorifca.

    un unico elemento que se comporta de diferentes maneras y puede dar como resultado diferentes resultados.

    -----------HERENCIA------------------------
    Teensmo una clase madre y una hija
    si la clase madre tiene 4 metodos la clase hija puede heredarlos como propias.
    Si la clase madre tiene 4 elementos y la clase hija 5 significa que la clase hija puede llega a tener 9 metodos.
    Herencia directa.
    con el encapsulamiento podemos decidir que metodos queremos usar en la clase hija
    -------------INTERFACES---------------------------
    Una interface se desarrolla y se implementa en una clase.
    al implementar estamos obligados a desarrollar todos los metodos que la interface define 
    El que se va hacer se define en una interfaz
    y el como se va hacer y la implementacion en una clase.
    
    -----------------------PROYECTO--------------------
    comandos:
    composer require --dev phpunit/phpunit
    
    composer dump 
    registra la informacion de composer.json

    php vendor/phpunit/phpunit/phpunit

    El proyecto esta desarrolladoe n TDD desarrollo guiado con pruebas, de acuerdo a los errores.
    cuando creemos las clases vamos a pasar la prueba.

    Debemos guiarnos por los errores dephpunit y no tanto por nuestra logica

    En un index podemos ver el resultado pero con test (phpunit en este caso) nos aseguramos al detalle de cada accion y garantizamos que el sistema funcione de manera correcta.

    Los test permanecen y te dan seguridad al momento de presentar el producto.

    UNa cosa en aprender un lenguaje
    otra es cosa es progrmacion
    y otra implementar con un framework
    ------------------FRAMEWORKS---------------------
    Laravel
    Tienen caracteristicas ya pre hechas de testing y otros
    Es importante que en un equipo se hable el mismo idioma.

    La especialidad ayuda al estandar al momento de desarrollar en equipo.

    - estrucura de carpetas
    crearemos un estrucutra parecida a laravel

    app                     //donde se alijo la app
        http                // controla peticiones
            controllers     
        helpers
    public                  //punto de acceso para el sistema
        
    vendor
    views                   //vistas

    front controller
    patron de acceso unico a un sistema web
    Creabamos muchos paginas independientes de accesso
    con esto hacemos que iingrese por un punto

    antes se necesitaba incluir todo a cada pagina
    debemos configurar el index.php de public
    rutas absolutos usan la raiz y la construyen desde ahi

    Nos sirve como un cuello de botella por donde pasan todas nuestras peticiones http
 -->

 <?php  /* esta es la etiqueta de inicia de cualquier archivo php */