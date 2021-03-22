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
       
      echo "<h4>Calcular el sueldo semanal  </h4>";   
       
      $suma = 0;  //Declaramos la variable suma
      foreach ($aSueldo as $precio) {       //Con el foreach recorremos el array
         $suma += $precio;                  //A la variable suma le vamos asignando la suma del array en bucle
      }
      echo "El salario semanal = $suma";    //Mostramos la variable suma con el importe total
       
?>
        
    </body>
</html>
