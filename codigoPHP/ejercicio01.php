<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
        
    </head>
    <body>
        
       <?php 
       
       $String  = 'Hola';                                   //Declaro una variable llamada String en la que guardo una cadena de caracteres
       $Int  = 10;
       $Float = 2.1;
       $Boolean = true;
      
       echo "<h4>echo</h4>"; 
       echo "String con salida echo = $String <br>"; 
       echo "Integer con salida echo = $Int <br>" ; 
       echo "Float con salida echo = $Float <br>" ;
       echo "Boolean con salida echo = $Boolean <br>";
         
       print "<h4>print</h4>";
       print "String con salida print = $String <br>"; 
       print "Integer con salida print = $Int <br>" ;
       print "Boolean con salida print = $Boolean <br>";
       
       print_r ("<h4>print_r</h4>"); 
       print_r("String con salida print_r = $String <br>"); 
       print_r("Integer con salida print_r = $Int <br>"); 
       print_r ("Float con salida print_r = $Float <br>"); 
       print_r("Boolean con salida print_r = $Boolean <br><br>"); 
     
       print_r("<h4>var_dump</h4>");
       var_dump("String con salida print_r = $String <br>"); 
       var_dump("Integer con salida print_r = $Int <br>"); 
       var_dump("Float con salida print_r = $Float <br>"); 
       var_dump("Boolean con salida print_r = $Boolean <br>"); 
       
       ?>
        
    </body>
</html>

