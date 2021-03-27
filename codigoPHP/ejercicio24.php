<!Doctype HTML>
<html>
 <head>
    <title>Cristina Manjon</title>
    <meta charset="UTF-8">
    <meta name="author" content="Cristina Manjon Lacalle">
      
 </head>
 <body>

    <?php   
      
      require_once '../core/210322ValidacionFormularios.php';    //Para importar la libreria Validación
      
      $entradaOK = true;  //Variable que nos indica que las eson correctas
      
      $aErrores = [ 'enombre' => null,          //Creamos el array de errores
                    'eemail' => null,           //Le inicializamos a null los posibles errores
                    'etelefono' => null,
                    'ecp' => null];
      
      $aFormulario =['nombre' => null,   //Creamos el array para guardar los datos que el usuario ha introducido
                     'email' => null,
                     'telefono' => null,
                      'cp' => null];
                                                           
        if (isset($_POST['enviar'])) {        //Si se ha pulsado el boton de enviar entonces :
            $nombre = $_POST['nombre'];       //Guardo las varables, para despues comprobarlas  
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $cp = $_POST['cp'];
            
            if (!empty($_POST['nombre']) || !empty($_POST['email']) || !empty($_POST['telefono']) || !empty($_POST['cp']) ) {         //Compruebo los campos, si alguno esta vacio entra aqui 
               
                    $aErrores['enombre']= validacionFormularios::comprobarAlfabetico($_POST['nombre'],100,1,1);   //LLama a la libreria de validacion, a la funcion que valida alfabetico, si hay un error lo almacena en el array de errores
                    $aErrores['eemail']= validacionFormularios::validarEmail($_POST['email'],1);
                    $aErrores['etelefono']= validacionFormularios::validaTelefono($_POST['telefono'],1);
                    $aErrores['ecp']= validacionFormularios::validarCp($_POST['cp'],1);
                    
                    foreach ($aErrores as $error){    //Recorre el array en busca de errores, con que haya uno entra
                            if ($error != null){                
                                $entradaOK = false;             //Y nos cambia la variable entrada a false
                            }
                    }
              }    
            }else{              //Si el formulario no estaba completo, tambien cambiamos la entrada a false                                            
                 $entradaOK = false;
            }
       
            if($entradaOK){     //Si la variable entrada llega hasta aqui en true , entra
                        $aFormulario['nombre']=$_POST['nombre'];      //Como es un array asociativo podemos recorrelo con estos indices
                        $aFormulario['email']=$_POST['email'];
                        $aFormulario['telefono']=$_POST['telefono'];
                        $aFormulario['cp']=$_POST['cp'];
                        
                        echo("Hola ".$aFormulario['nombre']."Con telefono".$aFormulario['telefono'].", has introducido todo correctamente. Gracias.");   //Mostramos el formulario
            }
            
        else {         //Codigo que se ejecuta antes de rellenar el formulario o hay errores al enviar
       ?>  
     
     <fieldset>
         <legend><h3>Formulario</h3></legend>
         <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">               <!-- echo $_SERVER['PHP_SELF'] esto significa que volvemos a mostrar el formulario -->
                <label for="nombre">NOMBRE:</label>                                                  <!-- Guardamos en value  -->
                    <input type="text" id="nombre" name="nombre" value="                                           
                        <?php if($aErrores['enombre'] == null && isset($_POST['nombre'])){         //Si en el array errores esta vacio su error y si se ha rellenado el campo de nombre, entra    
                            echo $_POST['nombre'];}                                                 //Pero si lo ha introducido correctamente lo guardo
                        ?>  ">
                         <br>    
                        <?php
                            if ($aErrores['enombre'] != null) {                                     //Pero si en el array de errores si esta, entra aqui
                               echo "⚠️".$aErrores['enombre']."<br>";                                          //aparece el mensaje de error que tiene el array aErrores
                            }
                        ?> <br>
                         
                <label for="email">EMAIL:</label>                                                  <!-- Guardamos en value  -->
                    <input type="text" id="email" name="email" value="                                           
                        <?php if($aErrores['eemail'] == null && isset($_POST['email'])){        //Si el array errores esta vacio su error y si se ha rellenado el campo, entra    
                            echo $_POST['email'];}                                                //Pero si lo ha introducido correctamente lo guardo
                        ?>  ">
                         <br>   
                        <?php
                            if ($aErrores['eemail'] != null) {                                     //Pero si en el array de errores si esta, entra aqui
                               echo "⚠️".$aErrores['eemail']."<br>";                                          //aparece el mensaje de error que tiene el array aErrores
                            }
                        ?> <br>
                <label for="telefono">TELEFONO:</label>                                                  <!-- Guardamos en value  -->
                    <input type="text" id="telefono" name="telefono" value="                                           
                        <?php if($aErrores['etelefono'] == null && isset($_POST['telefono'])){        //Si el array errores esta vacio su error y si se ha rellenado el campo, entra    
                            echo $_POST['telefono'];}                                                 //Pero si lo ha introducido correctamente lo guardo
                        ?>  ">
                         <br>    
                        <?php
                            if ($aErrores['etelefono'] != null) {                                     //Pero si en el array de errores si esta, entra aqui
                               echo "⚠️".$aErrores['etelefono']."<br>";                                          //aparece el mensaje de error que tiene el array aErrores
                            }
                        ?><br> 
                <label for="cp">CP:</label>                                                  <!-- Guardamos en value  -->
                    <input type="text" id="cp" name="cp" value="                                           
                        <?php if($aErrores['ecp'] == null && isset($_POST['cp'])){             //Si el array errores esta vacio su error y si se ha rellenado el campo, entra    
                            echo $_POST['cp'];}                                                 //Pero si lo ha introducido correctamente lo guardo
                        ?> ">
                         <br>    
                        <?php
                            if ($aErrores['ecp'] != null) {                                     //Pero si en el array de errores si esta, entra aqui
                               echo "⚠️".$aErrores['ecp']."<br>";                                          //aparece el mensaje de error que tiene el array aErrores
                            }
                        ?> <br> 
            
                    
                    <input type="submit" value="Enviar" name="enviar">
            </form>
      </fieldset>  
     
       <?php } ?>
        
  </body>
</html>