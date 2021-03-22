<!Doctype HTML>
<html>
 <head>
    <title>Cristina Manjon</title>
    <meta charset="UTF-8">
    <meta name="author" content="Cristina Manjon Lacalle">
      
 </head>
 <body>
      
        
      <?php   
                                                           
        if (isset($_POST['enviar'])) {        //Si se ha pulsado el boton de enviar entonces :
            $nombre = $_POST['nombre'];         //Guardo las varables, para despues comprobarlas  
            $apellido = $_POST['apellido'];
            $localidad = $_POST['localidad'];
            
            if (empty($_POST['nombre']) || empty($_POST['apellido'] || empty($_POST['localidad']) )) {    //Compruebo los campos, si alguno esta vacio entra aqui 
       ?>        
            <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">               <!-- echo $_SERVER['PHP_SELF'] esto significa que volvemos a mostrar el formulario -->
                <label for="nombre">NOMBRE:</label>
                    <input type="text" id="nombre" name="nombre" ><br>
                    <?php
                        if (empty($nombre)) {                                           //Si la variable $nombre esta vacia, entra aqui
                        echo "<a style='color:red;'>INTRODUCE UN NOMBRE</a><br>";                    //Mostramos un mensaje de error para que el usuario se de cuenta
                        }
                    ?>
                <label for="apellido">APELLIDO:</label>
                    <input type="text" id="apellido" name="apellido" ><br><br>
                    <?php
                        if (empty($apellido)) {                                         //Si la variable $apellido esta vacia, entra aqui
                        echo "<a style='color:red;'>INTRODUCE UN APELLIDO</a><br>";                  //Mostramos un mensaje de error para que el usuario se de cuenta
                        }
                    ?>
                <label for="localidad">Localidad:</label>
                    <input type="checkbox" name="localidad[]" value="Benavente" >Benavente<br>
                    <input type="checkbox" name="localidad[]" value="Zamora" >Zamora<br>
                    <input type="checkbox" name="localidad[]" value="Zamora" >Pueblos<br><br>
                    
                    <?php
                        if (empty($localidad)) {                                            //Si la variable $localidad esta vacia, entra aqui
                        echo "<a style='color:red;'>Marca una localidad</a><br>";                       //Mostramos un mensaje de error para que el usuario se de cuenta
                        }
                    ?>
                    
                    <input type="submit" value="Enviar" name="enviar">
            </form>
       <?php
           }else {                                                                         //Pero si todo estaba bien rellenado solo lo mostraremos
               echo "Tu nombre es : ".$nombre."<br>Tu apellido es: ".$apellido."<br>Tu localidad es : ";
               foreach($localidad as $zona){
                   print "La localidad es $zona";
               }
           }
       
        }else {            //Sin embargo si no se ha acabado de rellenar el formulario lo seguiremos mostrando
       ?>  
     
        <fieldset>
        <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">   
            NOMBRE: <input type="text" name="nombre" ><br><br>
            APELLIDO <input type="text" name="apellido" ><br><br>
            
            <input type="checkbox" name="localidad[]" value="Benavente" >Benavente<br>
            <input type="checkbox" name="localidad[]" value="Zamora" >Zamora<br>
            <input type="checkbox" name="localidad[]" value="Zamora" >Pueblos<br><br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
      </fieldset>  
     
       <?php } ?>
        
  </body>
</html>