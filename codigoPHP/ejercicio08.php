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
       
       echo "<h4>La Ip desde desde la que estoy accediendo es:  </h4>"; 
       echo  $_SERVER['REMOTE_ADDR'];                                    //Accedo a la variable globar $_SERVER el parametrp REMOTE_ADDR nos deuelve la ip desde la que estoy accediendo
       
       echo "<h4>Si quiero ver todos los parametros de $ Server con foreach</h4>";  //Recorrer la variable superglobar con foreach
       foreach ($_SERVER as $parm => $value) echo "$parm = '$value'<br>";
       
       echo "<h4>Si quiero ver todos los parametros de $ Server con var dump</h4>"; //Recorrer la variable superglobar con var_dump
       echo "<pre>";
       var_dump($_SERVER);
       echo"</pre>";
       
       //-------- Ultima modificacion 22-03-2021 -------
?>
        
    </body>
</html>
