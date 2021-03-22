<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
      
        
    </head>
    <body>
        
       <?php 
       
        $fecha = date("d-m-Y");                             //Guardo en la variable fecha la fecha de hoy con el formato dia mes y año
        echo "<h2>Muestro la fecha con 60 dias mas</h2>";
        echo date("d-m-Y",strtotime($fecha."+ 60 days"));    //muestro la fecha con el formato dia mes año, con strtotime puedo añadir los dias a la fecha guardada en la variable
     
        echo "<h2>Muestro la fecha con 5 meses mas</h2>";     
        echo date("d-m-Y",strtotime($fecha."+ 5 months"));
                
        echo "<h2>Muestro la fecha con 3 años mas</h2>";     
        echo date("d-m-Y",strtotime($fecha."+ 3 years"));
                
                 
        //-------- Ultima modificacion 22-03-2021 -------
                
       ?>
        
    </body>
</html>
