<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
        
    </head>
    <body>
        
       <?php 
 
    
       $fecha = new DateTime();                     //Creo una variable llamada fecha que es de tipo fecha
       $fecha->getTimestamp();                      //Con getTimeStamp obtengo la hora como un numero entero 
       echo $fecha ->format('d/m/Y') ;              //Muestro la variable con el formato dia mes año
     
       //-------- Ultima modificacion 22-03-2021 -------
       ?>
   
    </body>
</html>

