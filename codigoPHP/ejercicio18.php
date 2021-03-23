<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
      
        
    </head>
    <body>
        
       <?php 
       
                                        //Vamos a inizializar el array para que los sitios que esten vacios poder asignarle null
       
        $fila = 1;                      //Inicializo las filas a 1
        while ($fila <= 20) {           //Recorremos las filas mientras que no supere 20
            $asiento = 1;               //Inizializamos los asientos a 1
            while ($asiento <= 15) {    //Recorremos los asientos mientras no superen los 15
                $aTeatro[$fila][$asiento] = null; //Asigna el valor null a la posición donde apunta el puntero del array.
                $asiento++;             //Avanza el puntero de los asientos
            }
            $fila++;                    //Avanza el puntero de las filas 
        }
        
        
                                   //Creamos un array que se llama $aTeatro
       $aTeatro[1][1] = "Pepe";   //Asignamos valores al array, el primer indice para las filas y el segundo para el asiento
       $aTeatro[3][2] = "Juan";   //Entonces nos queda que Juan se va a sentar en la fila 3 en el asiento 2
       $aTeatro[4][8] = "Carlos"; 
       $aTeatro[5][4] = "Pedro";
       $aTeatro[3][5] = "Maria";
       $aTeatro[1][3] = "Luis";
       $aTeatro[4][2] = "Johanna";
       $aTeatro[2][1] = "Eva";
      
        echo"<h4>Asientos ocupados en el teatro </h4> <h5>Recorremos con each() </h5>";     //Para mostrar los asiento ocupados
        
        reset($aTeatro); //Con reset ponemos el puntero al principio
        while (list($fila, $asiento) = each($aTeatro)) {  //Devuelve un array con la clave y el elemento de la posición actual. Además avanza el puntero interno una posición.
             while (list($asiento, $persona) = each($asiento)) {  //En el segundo while nos situamos en los asientos 
                if(!null($aTeatro[$fila][$asiento])) {
                 echo("En la fila " . $fila ." en el asiento " . $asiento ." se sentará " .$persona .".<br>"); //Lo mostramos
              }
           }
        }
       
      
       ?>
        
    </body>
</html>
