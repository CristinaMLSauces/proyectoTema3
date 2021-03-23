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
      
        echo"<h4>Asientos recorridos con foreach</h4>";     //Para mostrar los asiento ocupados
                                                           //Recorremos el array con un foreach
        foreach ($aTeatro as $fila => $asiento) {          //Con el primer foreach recorremos las filas
            foreach ($asiento as $asiento => $persona) {   //Con este los asientos
               if (!is_null($aTeatro[$fila][$asiento])) {   //Comprobamos que donde esta el puntero no esta vacio
                echo("En la fila " . $fila ." el asiento " . $asiento ." se sentará " . $persona .".<br>");  //Y lo mostramos con un echo
               }
            }
        }
       
        
       echo"<h4>Asientos recorridos con for</h4>";
       
        for ($fila = 1; $fila <= 20; $fila++) {                         //Recorremos las filas, hasta que fila sea menor o igual a 20 por que es las que nos pide
            for ($asiento = 1; $asiento <= 15; $asiento++) {            //Recorremos los asientos, hasta 15 por que son lo que hay en cada fila
                if ($aTeatro[$fila][$asiento]) {                        //Si donde esta el puntero no esta vacio entra
                    echo("En la fila " . $fila ." el asiento " . $asiento ." se sentará " . $aTeatro[$fila][$asiento] .".<br>");  //Lo mostramos con un echo
                    
                }
            }
        }
        
        echo"<h4>Asientos recorridos con while</h4>";
        
        
        $fila = 1;                      //Inicializo las filas a 1
        while ($fila <= 20) {           //Recorremos las filas mientras que no supere 20
            $asiento = 1;               //Inizializamos los asientos a 1
            while ($asiento <= 15) {    //Recorremos los asientos mientras no superen los 15
                if ($aTeatro[$fila][$asiento]) {       //Si donde esta el puntero no esta vacio entra
                    echo("En la fila " . $fila ." el asiento " . $asiento ." se sentará " . $aTeatro[$fila][$asiento] .".<br>");  //Lo mostramos con un echo
                }
                $asiento++;             //Avanza el puntero de los asientos
            }
            $fila++;                    //Avanza el puntero de las filas 
        }
        
        //Lo he mirado de Nerea y lo entiendo
       //-------- Ultima modificacion 23-03-2021 -------
       ?>
        
    </body>
</html>
