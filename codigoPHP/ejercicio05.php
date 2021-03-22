<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
        
    </head>
    <body>
        
       <?php 
 
    
       $fecha = new DateTime();
       $fecha->getTimestamp();
        echo $fecha ->format('d/m/Y') ;
     
       ?>
   
    </body>
</html>

