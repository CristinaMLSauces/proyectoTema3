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
       
       echo "<h4>Enseño el array con var_dump</h4>"; 
       
       $aSueldo["Lunes"]="30";                      //Creo un array para el sueldo de la semana, este array se llama $aSueldo
       $aSueldo["Martes"]="30";                     //Dentro del array guardamos los dias de la semana y dentro de cada dia un sueldo
       $aSueldo["Miercoles"]="30";
       $aSueldo["Jueves"]="30";
       $aSueldo["Viernes"]="20";
       $aSueldo["Sabado"]="0";
       $aSueldo["Domingo"]="0";
       
       var_dump($aSueldo);                           //Muestro el array sueldo
       
      echo "<h4>Calcular el sueldo semanal con funciones (reset,key,current,next) </h4>";   
       
      $suma = 0;                            //Declaramos la variable suma
      
       reset($aSueldo);                                         //Reset Establece el puntero interno de un array a su primer elemento
        while(!is_null(key($aSueldo))){                         //Key Obtiene una clave de un array, entonces con diferente a null le estamos diciendo que si no esta vacio que continue
            echo "<h4>" . key($aSueldo).":".current($aSueldo)."</h4>";    //Current devuelve el valor del elemento de matriz al que apunta actualmente el puntero          
            $suma += current($aSueldo);                         //Le vamos asignando a la variable suma lo elementos que nos va devolviendo current
            next($aSueldo);                                     //Next avanza el puntero interno de un array
        }
      
      
      
      echo "El salario semanal = $suma";    //Mostramos la variable suma con el importe total
  
      //Lo he copiado de Nerea pero lo entiendo
      //-------- Ultima modificacion 23-03-2021 -------
?>
        
    </body>
</html>
