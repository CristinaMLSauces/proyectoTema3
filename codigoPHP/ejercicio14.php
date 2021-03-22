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
       
       echo "<h4>Calculadora con funciones </h4>";
        
       require_once '../core/calculadora.php'; //Con require once buscamos la libreria creada y si no la encuentra da un error, sin emabrago con includes no da error
 
       $n1 = 5;
       $n2 = 8;
       
       echo "La suma de los numeros es ". suma($n1, $n2)."<br>";
       echo "La resta de los numeros es ". resta($n1, $n2)."<br>";
       echo "La division de los numeros es ". division($n1, $n2)."<br>";
       echo "La multiplicacion de los numeros es ". multiplicacion($n1, $n2)."<br>";
       
       
?>
        
    </body>
</html>
