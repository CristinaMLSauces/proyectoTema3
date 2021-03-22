<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
      
        
    </head>
    <body>
        
       <?php 
       
      echo "<h2>Fecha en Portugues</h2>"; 
      
     // Para que la hora se muestre en Portugués hay que instalar el paquete del idioma en el servidor - sudo apt-get install language-pack-pt
      
       setlocale(LC_ALL, "es_ES.utf-8");                             //Seleccionamos el idioma para la fecha
       date_default_timezone_set("Europe/Lisbon");                  //Esto es para cambiar la zona horaria por defecto
                                                                    
      
        echo strftime("<h3>%A %d de %B de %G</h3>");                //strftime Formatea una fecha/hora local según una configuración local
        //%A - Dia de la semana
        //%d - Numero del dia con 0 delante
        //%B - Nombre del mes completo
        //%G - Año
      
        
        //Lo he mirado de Nerea Nuevo pero lo entiendo
      
        
        
        
      
      //-------- Ultima modificacion 22-03-2021 -------

       ?>
        
    </body>
</html>
