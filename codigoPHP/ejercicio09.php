<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
      
        
    </head>
    <body>
        
       <?php 
       
       /*Autor: Cristina Manjon Lacalle */
       
       echo "<h4>Mostrar el path donde se ejecuta este fichero  </h4>"; 
       echo  $_SERVER['DOCUMENT_ROOT'];
       
      //si quiero ver todos los posibles parametros de server 
      //foreach ($_SERVER as $parm => $value)  echo "$parm = '$value'\n"; o var_dump($_SERVER);
       
?>
        
    </body>
</html>
