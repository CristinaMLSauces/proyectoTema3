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
       $Int  = 10;                                         //Declaro una variable llamada Int en la que guardo un integer (numero entero)                           
       $Float = 2.1;                                       //Declaro una variable llamada Float en la que guardo un float (numero decimal) 
       $Boolean = true;                                    //Declaro una variable llamada Boolean ue guarda un booleano (true/false)
      
       echo "<h4>echo</h4>";                               //Muestro las variables con echo
       echo "String con salida echo = $String <br>";        
       echo "Integer con salida echo = $Int <br>" ; 
       echo "Float con salida echo = $Float <br>" ;
       echo "Boolean con salida echo = $Boolean <br>";
         
       print "<h4>print</h4>";                                     //Muestro las variables con print
       print "String con salida print = $String <br>"; 
       print "Integer con salida print = $Int <br>" ;
       print "Boolean con salida print = $Boolean <br>";
       
       print_r ("<h4>print_r</h4>");                               //Muestro las variables con print_r
       print_r("String con salida print_r = $String <br>"); 
       print_r("Integer con salida print_r = $Int <br>"); 
       print_r ("Float con salida print_r = $Float <br>"); 
       print_r("Boolean con salida print_r = $Boolean <br><br>"); 
     
       print_r("<h4>var_dump</h4>");                                //Muestro las variables con var_dump
       var_dump("String con salida print_r = $String <br>"); 
       var_dump("Integer con salida print_r = $Int <br>"); 
       var_dump("Float con salida print_r = $Float <br>"); 
       var_dump("Boolean con salida print_r = $Boolean <br>"); 
      
       
       printf("<h4>printf</h4>");                                //Muestro las variables con printf
       printf("String con salida print_r = $String <br>"); 
       printf("Integer con salida print_r = $Int <br>"); 
       printf("Float con salida print_r = $Float <br>"); 
       printf("Boolean con salida print_r = $Boolean <br>"); 
      
       sprintf("<h4>sprintf</h4>");                           //Muestro las variables con var_dump
       sprintf("String con salida print_r = $String <br>"); 
       sprintf("Integer con salida print_r = $Int <br>"); 
       sprintf("Float con salida print_r = $Float <br>"); 
       sprintf("Boolean con salida print_r = $Boolean <br>"); 
      
        
       
       
         //-------- Ultima modificacion 22-03-2021 -------
       ?>
        
    </body>
</html>

