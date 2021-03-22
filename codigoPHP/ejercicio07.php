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
       
       echo "<h4>El fichero actual es: </h4>"; 
       
       echo "<h2>Usando basename</h2>";
       echo basename($_SERVER['PHP_SELF']);     //basename — Devuelve el último componente de nombre de una ruta , con Self le que mire la ruta de este mismo archivo
       
       echo "<h2>Sin usar basename</h2>";
       echo $_SERVER['PHP_SELF'];
       
        //-------- Ultima modificacion 22-03-2021 -------
       
       ?>
        
    </body>
</html>
