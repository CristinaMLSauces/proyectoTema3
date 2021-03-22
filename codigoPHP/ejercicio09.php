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
       
       echo "<h3>Mostrar el path donde se ejecuta este fichero  </h3>"; 
       echo  $_SERVER['DOCUMENT_ROOT'];        //El parametro DOCUMEN_ROOT nos devuelve el directorio raíz de documentos del servidor en el cual se está ejecutando
       
      //si quiero ver todos los posibles parametros de server 
      //foreach ($_SERVER as $parm => $value)  echo "$parm = '$value'\n"; o var_dump($_SERVER);
            
      //-------- Ultima modificacion 22-03-2021 -------
?>
        
    </body>
</html>
