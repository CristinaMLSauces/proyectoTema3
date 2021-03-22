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
       
       echo "<h4>Mostrar el contenido de las variables </h4>";
       
       echo "<h2>Con foreach $ Server</h2>"; 
       foreach ($_SERVER as $parm => $value)  echo "<b>$parm </b>= '$value'<br>";
      
       echo "<h2>Con print_r </h2>"; 
       
       echo "<h3>Globals </h3>";
       echo "<pre>";
           print_r($GLOBALS);
       echo "<h3>Server </h3>";
       echo "<pre>";
           print_r($_SERVER);
       echo "<h3>Get </h3>";
       echo "<pre>";
           print_r($_GET);
       echo "<h3>Post </h3>";
       echo "<pre>";
           print_r($_POST);
       echo "<h3>Files </h3>";
       echo "<pre>";
           print_r($_FILES);
       echo "<h3>Cookie </h3>";
       echo "<pre>";
           print_r($_COOKIE);
       echo "<h3>Session </h3>";
       echo "<pre>";
           print_r($_SESSION);
       echo "<h3>Rquest </h3>";
       echo "<pre>";   
           print_r($_REQUEST);
        echo "<h3>Env </h3>";
        echo "<pre>";
           print_r($_ENV);
       
 
       
?>
        
    </body>
</html>
