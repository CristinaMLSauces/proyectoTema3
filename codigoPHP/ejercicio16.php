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
       
       echo "<h4>Crear un array </h4>"; 
       
       $aSueldo["Lunes"]="30";
       $aSueldo["Martes"]="30";
       $aSueldo["Miercoles"]="30";
       $aSueldo["Jueves"]="30";
       $aSueldo["Viernes"]="20";
       $aSueldo["Sabado"]="0";
       $aSueldo["Domingo"]="0";
       
       print_r($aSueldo);
       
      echo "<h4>Calcular el sueldo semanal con funcion array_sum </h4>";   
      echo "El salario semanal es = " . array_sum($aSueldo) ;
       
?>
        
    </body>
</html>
