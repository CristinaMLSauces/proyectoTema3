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
       
       /*Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el
asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con
distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.
        */
       
       $aTeatro[1][1] = "Pepe";  //Asignamos valores al array, el primer indice para las filas y el segundo para el asiento
       $aTeatro[3][2] = "Juan";
       $aTeatro[4][8] = "Carlos";
       $aTeatro[5][4] = "Pedro";
       $aTeatro[8][2] = "Maria";

      
        echo"<h4>Asientos ocupados en el teatro</h4>";     //Para mostrar los asiento ocupados
        
        foreach ($aTeatro as $fila => $asiento) {          //Recorremos el array con un foreach, cone ste recorremos las filas
            foreach ($asiento as $asiento => $persona) {    //Con este los asientos
               echo("En la fila " . $fila ." el asiento " . $asiento ." se sentará " . $persona .".<br>"); //Lo mostramos
               
            }
        }
       
       
       ?>
        
    </body>
</html>
