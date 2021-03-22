<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
        <style>
            h2{
                color: Purple;
            }
            h3{
                color:violet;
            }
            b{
                color:violet;
            }
        </style>
        
    </head>
    <body>
        
       <?php 
       
       /*Autor: Cristina Manjon Lacalle */
       
       
       echo "<h2>Mostrar $ Server con foreach</h2>"; 
       foreach ($_SERVER as $parm => $value)  echo "<b>$parm </b>= '$value'<br>";      //Sacamos los parametros con foreach y los mostramos
      
       echo "<h2>Mostrar $ Server con print_r </h2>"; 
       
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
       
           
        //-------- Ultima modificacion 22-03-2021 -------
       
?>
        
    </body>
</html>
