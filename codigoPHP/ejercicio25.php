<!Doctype HTML>
<html>
 <head>
    <title>Cristina Manjon</title>
    <meta charset="UTF-8">
    <meta name="author" content="Cristina Manjon Lacalle">
    <style>
        .obligatorio{
                background-color: #ccc;
                padding: 5px;
            }
        label{
                margin-left: 30px;
            }
        input{
                border-radius: 5px;
                margin: 5px;
            }
        input:invalid{
                background-color: lightcoral;
            }
        .texto{
                 font-size: 19px;
                 font-weight: bold;
            }
    </style> 
 </head>
 <body>
    <h2>Plantilla para hacer formularios como churros</h2> 
    <?php   
      
      require_once '../core/210322ValidacionFormularios.php';    //Para importar la libreria Validación
      
      $entradaOK = true;  //Variable que nos indica que las eson correctas
      define("NOOBLIGATORIO", 0); 
      
      $aErrores = [ 'alfabetico' => null,  //Creamos el array de errores
                    'alfabeticoOpcional' => null,  //Le inicializamos a null los posibles errores
                    'alfanumerico' => null,
                    'alfanumericoOpcional' => null,
                    'entero' => null,
                    'enteroOpcional' => null,
                    'float' => null,
                    'floatOpcional' => null,
                    'email' => null,
                    'emailOpcional' => null,
                    'url' => null,
                    'urlOpcional' => null,
                    'fecha' => null,
                    'fechaOpcional' => null,
                    'dni' => null,
                    'dniOpcional' => null,
                    'cp' => null,
                    'cpOpcional' => null,
                    'password' => null,
                    'passwordOpcional' => null,
                    'telefono' => null,
                    'telefonoOpcional' => null,
                    'campoTexto' => null,
                    'selectorRadio' => null,
                    'selectorCheckbox' => null,
                    'selectorLista' => null];
     
  
      $aFormulario =['alfabetico' => null,              //Creamos el array de formulario
                    'alfabeticoOpcional' => null,       //Le inicializamos a null las variables
                    'alfanumerico' => null,
                    'alfanumericoOpcional' => null,
                    'entero' => null,
                    'enteroOpcional' => null,
                    'float' => null,
                    'floatOpcional' => null,
                    'email' => null,
                    'emailOpcional' => null,
                    'url' => null,
                    'urlOpcional' => null,
                    'fecha' => null,
                    'fechaOpcional' => null,
                    'dni' => null,
                    'dniOpcional' => null,
                    'cp' => null,
                    'cpOpcional' => null,
                    'password' => null,
                    'passwordOpcional' => null,
                    'telefono' => null,
                    'telefonoOpcional' => null,
                    'campoTexto' => null,
                    'selectorRadio' => null,
                    'selectorCheckbox' => null,
                    'selectorLista' => null];
                                                           
        if (isset($_REQUEST['enviar'])) {        //Si se ha pulsado el boton de enviar entonces :
           //ALFABETICO
                $aErrores['alfabetico']= validacionFormularios::comprobarAlfabetico($_REQUEST['alfabetico'],100,1,1);
                $aErrores['alfabeticoOpcional']= validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOpcional'],NOOBLIGATORIO);
            //ALFANUMERICO    
                $aErrores['alfanumerico']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumerico'],100,1,1);
                $aErrores['alfanumericoOpcional']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOpcional'],NOOBLIGATORIO);
            //ENTERO   
                $aErrores['entero']= validacionFormularios::comprobarEntero($_REQUEST['entero'],PHP_INT_MAX, -PHP_INT_MAX, 1);
                $aErrores['enteroOpcional']= validacionFormularios::comprobarEntero($_REQUEST['enteroOpcional'],NOOBLIGATORIO);
            //FLOAT    
                $aErrores['float']= validacionFormularios::comprobarFloat($_REQUEST['float'],PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 1);
                $aErrores['floatOpcional']= validacionFormularios::comprobarFloat($_REQUEST['floatOpcional'],NOOBLIGATORIO);
            //EMAIL    
                $aErrores['email']= validacionFormularios::validarEmail($_REQUEST['email'],1);
                $aErrores['emailOpcional']= validacionFormularios::validarEmail($_REQUEST['emailOpcional'],NOOBLIGATORIO);
            //URL    
                $aErrores['url']= validacionFormularios::validarURL($_REQUEST['url'],1);
                $aErrores['urlOpcional']= validacionFormularios::validarURL($_REQUEST['urlOpcional'],NOOBLIGATORIO);
            //FECHA   
                $aErrores['fecha']= validacionFormularios::validarFecha($_REQUEST['fecha'], "01/01/2200", "01/01/1900", 1);
                $aErrores['fechaOpcional']= validacionFormularios::validarFecha($_REQUEST['fechaOpcional'],NOOBLIGATORIO);
            //DNI   
                $aErrores['dni']= validacionFormularios::validarDni($_REQUEST['dni'],1);
                $aErrores['dniOpcional']= validacionFormularios::validarDni($_REQUEST['dniOpcional'],NOOBLIGATORIO);
            //CP   
                $aErrores['cp']= validacionFormularios::validarCp($_REQUEST['cp'],1);
                $aErrores['cpOpcional']= validacionFormularios::validarCp($_REQUEST['cpOpcional'],NOOBLIGATORIO);
            //PASSWORD    
                $aErrores['password']= validacionFormularios::validarPassword($_REQUEST['password'], 6, 1);
                $aErrores['passwordOpcional']= validacionFormularios::validarPassword($_REQUEST['passwordOpcional'],NOOBLIGATORIO);
            //TELEFONO    
                $aErrores['telefono']= validacionFormularios::validaTelefono($_REQUEST['telefono'],1);
                $aErrores['telefonoOpcional']= validacionFormularios::validaTelefono($_REQUEST['telefonoOpcional'],NOOBLIGATORIO);
            //CAMPO TEXTO   
                $aErrores['campoTexto'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['campoTexto'], 100, 1, 1);
            //RADIO BUTTON  
                if(!isset($_REQUEST['selectorRadio'])){$aErrores['selectorRadio'] = "Marca al menos una casilla";}
            //CHECK BOX   
                if(!isset($_REQUEST['selectorCheckbox'])){$aErrores['selectorCheckbox'] = "Marca al menos una casilla";}
            //LISTA
                $aErrores['selectorLista'] = validacionFormularios::validarElementoEnLista($_REQUEST['selectorLista'], array("opcion1", "opcion2", "opcion3")); //Opciones de la lista   
               
                
                foreach ($aErrores as $error){          //Recorre el array en busca de errores, con que haya uno entra
                    if ($error != null){                
                        $entradaOK = false;             //Y nos cambia la variable entrada a false
                    }
                }
                 
            }else{                                         //Si el formulario no estaba completo, tambien cambiamos la entrada a false                                            
                 $entradaOK = false;
            }
       
            if($entradaOK){  
                // Cargamos en el $aFormulario el valos de aquellos campos que se han rellenado correctamente
                //ALFABETICO
                        $aFormulario['alfabetico']=$_REQUEST['alfabetico'];       
                        $aFormulario['alfabeticoOpcional']=$_REQUEST['alfabeticoOpcional'];
                //ALFANUMERICO
                        $aFormulario['alfanumerico']=$_REQUEST['alfanumerico'];
                        $aFormulario['alfanumericoOpcional']=$_REQUEST['alfanumericoOpcional'];
                //ENTERO        
                        $aFormulario['entero']=$_REQUEST['entero'];
                        $aFormulario['enteroOpcional']=$_REQUEST['enteroOpcional'];
                //FLOAT
                        $aFormulario['float']=$_REQUEST['float'];
                        $aFormulario['floatOpcional']=$_REQUEST['floatOpcional'];
                //EMAIL        
                        $aFormulario['email']=$_REQUEST['email'];
                        $aFormulario['emailOpcional']=$_REQUEST['emailOpcional'];
                //URL  
                       $aFormulario['url']=$_REQUEST['url'];
                       $aFormulario['urlOpcional']=$_REQUEST['urlOpcional']; 
                //FECHA  
                       $aFormulario['fecha']=$_REQUEST['fecha'];
                       $aFormulario['fechaOpcional']=$_REQUEST['fechaOpcional'];
                //DNI        
                       $aFormulario['dni']=$_REQUEST['dni'];
                       $aFormulario['dniOpcional']=$_REQUEST['dniOpcional'];
                //CP       
                       $aFormulario['cp']=$_REQUEST['cp'];
                       $aFormulario['cpOpcional']=$_REQUEST['cpOpcional'];
                //PASSWORD          
                       $aFormulario['password']=$_REQUEST['password'];
                       $aFormulario['passwordOpcional']=$_REQUEST['passwordOpcional'];
                //TELEFONO        
                       $aFormulario['telefono']=$_REQUEST['telefono'];
                       $aFormulario['telefonoOpcional']=$_REQUEST['telefonoOpcional'];
                //CAMPO TEXTO  
                       $aFormulario['campoTexto']=$_REQUEST['campoTexto'];  
                //RADIO BUTTON  
                       $aFormulario['selectorRadio'] = $_REQUEST['selectorRadio'];
                //CHECK BOX   
                       $aFormulario['selectorCheckbox'] = $_REQUEST['selectorCheckbox'];
                //LISTA
                       $aFormulario['selectorLista'] = $_REQUEST['selectorLista'];
                     
                     
                // Mostramos los valores de cada campo obligatorio
                       
                echo "<h3>OBLIGATORIOS</h3>";                                               //O B L I G A T O R I O S
                echo "Alfabetico: " . $aFormulario['alfabetico'] . "<br>";                //ALFABETICO
                echo "Alfanumerico: " . $aFormulario['alfanumerico'] . "<br>";            //ALFANUMERICO
                echo "Entero: " . $aFormulario['entero'] . "<br>";                        //ENTERO
                echo "Float: " . $aFormulario['float'] . "<br>";                          //FLOAT
                echo "Email: " . $aFormulario['email'] . "<br>";                          //EMAIL
                echo "URL: " . $aFormulario['url'] . "<br>";                              //URL  
                echo "Fecha: " . date('d/m/Y', strtotime($aFormulario['fecha'])) . "<br>";//FECHA
                echo "DNI: " . $aFormulario['dni'] . "<br>";                              //DNI      
                echo "Codigo Postal: " . $aFormulario['cp'] . "<br>";                     //CP   
                echo "Contraseña: " . $aFormulario['password'] . "<br>";                  //PASSWORD      
                echo "Telefono: " . $aFormulario['telefono'] . "<br>";                    //TELEFONO        
                echo "Campo de texto: " . $aFormulario['campoTexto'] . "<br>";            //CAMPO TEXTO  
                echo "Radio button: " . $aFormulario['selectorRadio'] . "<br>";           //RADIO BUTTON 
                echo "Lista: " . $aFormulario['selectorLista'] . "<br>";                  //CHECK BOX   
                echo "Checkbox: ";                                                            //LISTA
                if(isset($aFormulario['selectorCheckbox']['opcion1'])){
                    echo $aFormulario['selectorCheckbox']['opcion1'] . " ";
                }
                if(isset($aFormulario['selectorCheckbox']['opcion2'])){
                    echo $aFormulario['selectorCheckbox']['opcion2'] . " ";
                }
                if(isset($aFormulario['selectorCheckbox']['opcion3'])){
                    echo $aFormulario['selectorCheckbox']['opcion3'];
                }
           
                // Si los campos opcionales se han rellenado se muestran, sino no
                echo "<h3>OPCIONALES</h3>";                                                                         // O P C I O N A L E S
                if($aFormulario['alfabeticoOpcional'] != null){                                                  //ALFABETICO 
                    echo "Alfabetico opcional: " . $aFormulario['alfabeticoOpcional'] . "<br>";
                }
                if($aFormulario['alfanumericoOpcional'] != null){                                                //ALFANUMERICO
                    echo "Alfanumerico opcional: " . $aFormulario['alfanumericoOpcional'] . "<br>";            
                }
                if($aFormulario['enteroOpcional'] != null){                                                      //ENTERO
                    echo "Entero opcional: " . $aFormulario['enteroOpcional'] . "<br>";                         
                }
                if($aFormulario['floatOpcional'] != null){                                                       //FLOAT
                    echo "Float opcional: " . $aFormulario['floatOpcional'] . "<br>";
                }
                if($aFormulario['emailOpcional'] != null){                                                       //EMAIL
                    echo "Email opcional: " . $aFormulario['emailOpcional'] . "<br>";
                }
                if($aFormulario['urlOpcional'] != null){                                                         //URL
                    echo "URL opcional: " . $aFormulario['urlOpcional'] . "<br>";
                }
                if($aFormulario['fechaOpcional'] != null){                                                       //FECHA
                    echo "Fecha opcional: " . date('d/m/Y', strtotime($aFormulario['fechaOpcional'])) . "<br>"; 
                }  
                if($aFormulario['dniOpcional'] != null){                                                         //DNI 
                    echo "DNI opcional: " . $aFormulario['dniOpcional'] . "<br>";
                }
                if($aFormulario['cpOpcional'] != null){                                                          //CP
                    echo "CodigoPostal opcional: " . $aFormulario['cpOpcional'] . "<br>";
                }
                if($aFormulario['passwordOpcional'] != null){                                                   //PASSWORD
                    echo "Password opcional: " . $aFormulario['passwordOpcional'] . "<br>";
                }
                if($aFormulario['telefonoOpcional'] != null){                                                   //TELEFONO
                    echo "Telefono opcional: " . $aFormulario['telefonoOpcional'] . "<br>";
                }
                 
            }
             
        else {         //Codigo que se ejecuta antes de rellenar el formulario o hay errores al enviar
       ?>  
     
     <fieldset style="width:40%">
         <legend><h3>Formulario</h3></legend>
         <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <!---------------------------- ALFABETICO -------------------------------------------->
                <label class="texto">Alfabético: </label>
                    <input type = "text" class="obligatorio" name = "alfabetico" value=
                        "<?php if($aErrores['alfabetico'] == NULL && isset($_REQUEST['alfabetico'])){ echo $_REQUEST['alfabetico'];}?>">
                        <?php if ($aErrores['alfabetico'] != null) { echo "  ⚠️".$aErrores['alfabetico']."<br>"; } ?> <br>
                        
                <label>Alfabético Opcional: </label>
                    <input type = "text" name = "alfabeticoOpcional" value=
                        "<?php if($aErrores['alfabeticoOpcional'] == NULL && isset($_REQUEST['alfabeticoOpcional'])){ echo $_REQUEST['alfabeticoOpcional'];}?>">
                        <?php if ($aErrores['alfabeticoOpcional'] != null) { echo "  ⚠️".$aErrores['alfabeticoOpcional'] ; } ?> <hr width="90%" align="left" />
        <!---------------------------- ALFANUMERICO -------------------------------------------->        
                <label class="texto">Alfanumerico: </label>
                    <input type = "text" class="obligatorio" name = "alfanumerico" value=
                        "<?php if($aErrores['alfanumerico'] == NULL && isset($_REQUEST['alfanumerico'])){ echo $_REQUEST['alfanumerico'];}?>">
                        <?php if ($aErrores['alfanumerico'] != null) { echo "  ⚠️".$aErrores['alfanumerico']."<br>"; } ?> <br>
                        
                <label>Alfanumerico Opcional: </label>
                    <input type = "text" name = "alfanumericoOpcional" value=
                        "<?php if($aErrores['alfanumericoOpcional'] == NULL && isset($_REQUEST['alfanumericoOpcional'])){ echo $_REQUEST['alfanumericoOpcional'];}?>">
                        <?php if ($aErrores['alfanumericoOpcional'] != null) { echo "   ⚠️".$aErrores['alfanumericoOpcional'] ; } ?> <hr width="90%" align="left" />       
        <!---------------------------- ENTERO -------------------------------------------->        
                <label class="texto">Entero: </label>
                    <input type = "number" class="obligatorio" name = "entero" value=
                        "<?php if($aErrores['entero'] == NULL && isset($_REQUEST['entero'])){ echo $_REQUEST['entero'];}?>">
                        <?php if ($aErrores['entero'] != null) { echo "   ⚠️".$aErrores['entero']."<br>"; } ?> <br>
                        
                <label>Entero Opcional: </label>
                    <input type = "number"  name = "enteroOpcional" value=
                        "<?php if($aErrores['enteroOpcional'] == NULL && isset($_REQUEST['enteroOpcional'])){ echo $_REQUEST['enteroOpcional'];}?>">
                        <?php if ($aErrores['enteroOpcional'] != null) { echo "   ⚠️".$aErrores['enteroOpcional'] ; } ?> <hr width="90%" align="left" /> 
        <!---------------------------- FLOAT -------------------------------------------->        
                <label class="texto">Float: </label>
                    <input type = "text" class="obligatorio" name= "float" value=
                        "<?php if($aErrores['float'] == NULL && isset($_REQUEST['float'])){ echo $_REQUEST['float'];}?>">
                        <?php if ($aErrores['float'] != null) { echo "⚠️".$aErrores['float']."<br>"; } ?> <br>
                        
                <label>Float Opcional: </label>
                    <input type = "text"  name = "floatOpcional" value=
                        "<?php if($aErrores['floatOpcional'] == NULL && isset($_REQUEST['floatOpcional'])){ echo $_REQUEST['floatOpcional'];}?>">
                        <?php if ($aErrores['floatOpcional'] != null) { echo "   ⚠️".$aErrores['floatOpcional'] ; } ?> <hr width="90%" align="left" /> 
        <!---------------------------- EMAIL -------------------------------------------->        
                <label class="texto">Email: </label>
                    <input type = "email" class="obligatorio" name = "email" value=
                        "<?php if($aErrores['email'] == NULL && isset($_REQUEST['email'])){ echo $_REQUEST['email'];}?>">
                        <?php if ($aErrores['email'] != null) { echo "   ⚠️".$aErrores['email']."<br>"; } ?> <br>
                        
                <label>Email Opcional: </label>
                    <input type = "email" name = "emailOpcional" value=
                        "<?php if($aErrores['emailOpcional'] == NULL && isset($_REQUEST['emailOpcional'])){ echo $_REQUEST['emailOpcional'];}?>">
                        <?php if ($aErrores['emailOpcional'] != null) { echo "   ⚠️".$aErrores['emailOpcional'] ; } ?> <hr width="90%" align="left" />
        <!---------------------------- URL -------------------------------------------->        
                <label class="texto">Url: </label>
                    <input type = "url" class="obligatorio" name = "url" value=
                        "<?php if($aErrores['url'] == NULL && isset($_REQUEST['url'])){ echo $_REQUEST['url'];}?>">
                        <?php if ($aErrores['url'] != null) { echo "   ⚠️".$aErrores['url']."<br>"; } ?> <br>
                        
                <label>Url Opcional: </label>
                    <input type = "url" name = "urlOpcional" value=
                        "<?php if($aErrores['urlOpcional'] == NULL && isset($_REQUEST['urlOpcional'])){ echo $_REQUEST['urlOpcional'];}?>">
                        <?php if ($aErrores['urlOpcional'] != null) { echo "   ⚠️".$aErrores['urlOpcional'] ; } ?> <hr width="90%" align="left" />  
        <!---------------------------- FECHA -------------------------------------------->        
                <label class="texto">Fecha: </label>
                    <input type = "date" class="obligatorio" name = "fecha" value=
                        "<?php if($aErrores['fecha'] == NULL && isset($_REQUEST['fecha'])){ echo $_REQUEST['fecha'];}?>">
                        <?php if ($aErrores['fecha'] != null) { echo "   ⚠️".$aErrores['fecha']."<br>"; } ?> <br>
                        
                <label>Fecha Opcional: </label>
                    <input type = "date" name = "fechaOpcional" value=
                        "<?php if($aErrores['fechaOpcional'] == NULL && isset($_REQUEST['fechaOpcional'])){ echo $_REQUEST['fechaOpcional'];}?>">
                        <?php if ($aErrores['fechaOpcional'] != null) { echo "   ⚠️".$aErrores['fechaOpcional'] ; } ?> <hr width="90%" align="left" />         
        <!---------------------------- DNI -------------------------------------------->        
                <label class="texto">Dni: </label>
                    <input type = "text" class="obligatorio" name = "dni" value=
                        "<?php if($aErrores['dni'] == NULL && isset($_REQUEST['dni'])){ echo $_REQUEST['dni'];}?>">
                        <?php if ($aErrores['dni'] != null) { echo "   ⚠️".$aErrores['dni']."<br>"; } ?> <br>
                        
                <label>Dni Opcional: </label>
                    <input type = "text" name = "dniOpcional" value=
                        "<?php if($aErrores['dniOpcional'] == NULL && isset($_REQUEST['dniOpcional'])){ echo $_REQUEST['dniOpcional'];}?>">
                        <?php if ($aErrores['dniOpcional'] != null) { echo "   ⚠️".$aErrores['dniOpcional'] ; } ?> <hr width="90%" align="left" />       
        <!---------------------------- CODIGO POSTAL -------------------------------------------->        
                <label class="texto">CP: </label>
                    <input type = "text" class="obligatorio" name = "cp" value=
                        "<?php if($aErrores['cp'] == NULL && isset($_REQUEST['cp'])){ echo $_REQUEST['cp'];}?>">
                        <?php if ($aErrores['cp'] != null) { echo "   ⚠️".$aErrores['cp']."<br>"; } ?> <br>
                        
                <label>CP Opcional: </label>
                    <input type = "text"  name = "cpOpcional" value=
                        "<?php if($aErrores['cpOpcional'] == NULL && isset($_REQUEST['cpOpcional'])){ echo $_REQUEST['cpOpcional'];}?>">
                        <?php if ($aErrores['cpOpcional'] != null) { echo "   ⚠️".$aErrores['cpOpcional'] ; } ?> <hr width="90%" align="left" />         
        <!---------------------------- PASSWORD -------------------------------------------->        
                <label class="texto">Password: </label>
                    <input type = "password" class="obligatorio"  name = "password" value=
                        "<?php if($aErrores['password'] == NULL && isset($_REQUEST['password'])){ echo $_REQUEST['password'];}?>">
                        <?php if ($aErrores['password'] != null) { echo "   ⚠️".$aErrores['password']."<br>"; } ?> <br>
                        
                <label>Password Opcional: </label>
                    <input type = "password" name = "passwordOpcional" value=
                        "<?php if($aErrores['passwordOpcional'] == NULL && isset($_REQUEST['passwordOpcional'])){ echo $_REQUEST['passwordOpcional'];}?>">
                        <?php if ($aErrores['passwordOpcional'] != null) { echo "   ⚠️".$aErrores['passwordOpcional'] ; } ?> <hr width="90%" align="left" />                  
        <!---------------------------- TELEFONO -------------------------------------------->        
                <label class="texto">Telefono: </label>
                    <input type = "tel" class="obligatorio" name = "telefono" value=
                        "<?php if($aErrores['telefono'] == NULL && isset($_REQUEST['telefono'])){ echo $_REQUEST['telefono'];}?>">
                        <?php if ($aErrores['telefono'] != null) { echo "   ⚠️".$aErrores['telefono']."<br>"; } ?> <br>
                       
                <label>Telefono Opcional: </label>
                    <input type = "tel" name = "telefonoOpcional" value=
                        "<?php if($aErrores['telefonoOpcional'] == NULL && isset($_REQUEST['telefonoOpcional'])){ echo $_REQUEST['telefonoOpcional'];}?>">
                        <?php if ($aErrores['telefonoOpcional'] != null) { echo "   ⚠️".$aErrores['telefonoOpcional'] ; } ?> <hr width="50%" align="left" />                 
        <!---------------------------- AREA DE TEXTO -------------------------------------------->        
                <label >Texto:</label>
                    <textarea name="campoTexto" placeholder="Maximo 500 caracteres" value=
                        "<?php if($aErrores['campoTexto'] == NULL && isset($_REQUEST['campoTexto'])){ echo $_REQUEST['campoTexto'];} ?>"></textarea>             
                        <?php if ($aErrores['campoTexto'] != NULL) { echo "   ⚠️".$aErrores['campoTexto'];  }?><br><br>
        <!---------------------------- RADIO BUTTON -------------------------------------------->       
        
                <label>Radio Button: </label><br><br>
                        <input type="radio" id="RO1" name="selectorRadio" value="Opcion 1" <?php if(isset($_REQUEST['selectorRadio']) && $_REQUEST['selectorRadio'] == "Opcion 1"){ echo 'checked';} ?>> 
                            <label for="RO1">Opcion 1</label><br/>
                        <input type="radio" id="RO2" name="selectorRadio" value="Opcion 2" <?php if(isset($_REQUEST['selectorRadio']) && $_REQUEST['selectorRadio'] == "Opcion 2"){ echo 'checked';} ?>>
                            <label for="RO2">Opcion 2</label><br/>
                        <input type="radio" id="RO3" name="selectorRadio" value="Opcion 3" <?php if(isset($_REQUEST['selectorRadio']) && $_REQUEST['selectorRadio'] == "Opcion 3"){ echo 'checked';} ?>> 
                            <label for="RO3">Opcion 3</label><br/>
                        <?php if ($aErrores['selectorRadio'] != NULL) { echo "   ⚠️".$aErrores['selectorRadio'];}?> <hr width="50%" align="left" />
        <!---------------------------- CHECK BOX -------------------------------------------->                   
                <label for="checkbox">CheckBox: </label><br><br>
                        <input type="checkbox" id="CO1" name="selectorCheckbox[opcion1]" value="Opcion 1" <?php if(isset($_REQUEST['selectorCheckbox']['opcion1'])){ echo 'checked';} ?>>
                            <label for="CO1">Opcion 1</label><br/>
                        <input type="checkbox" id="CO2" name="selectorCheckbox[opcion2]" value="Opcion 2" <?php if(isset($_REQUEST['selectorCheckbox']['opcion2'])){ echo 'checked';} ?>>
                            <label for="CO2">Opcion 2</label><br/>
                        <input type="checkbox" id="CO3" name="selectorCheckbox[opcion3]" value="Opcion 3" <?php if(isset($_REQUEST['selectorCheckbox']['opcion3'])){ echo 'checked';} ?>>
                            <label for="CO3">Opcion 3</label><br/>
                        <?php if ($aErrores['selectorCheckbox'] != NULL) { echo "   ⚠️".$aErrores['selectorCheckbox']; }?> <hr width="50%" align="left" />           
        <!---------------------------- LISTA -------------------------------------------->                                       
                 <label>Lista: </label><br>
                        <select name="selectorLista">
                            <option value="opcion1" <?php if(isset($_REQUEST['selectorLista'])){if($aErrores['selectorLista'] == NULL && $_REQUEST['selectorLista'] == "opcion1"){ echo "selected";}} ?>>Opcion 1</option>
                            <option value="opcion2" <?php if(isset($_REQUEST['selectorLista'])){if($aErrores['selectorLista'] == NULL && $_REQUEST['selectorLista'] == "opcion2"){ echo "selected";}} ?>>Opcion 2</option>
                            <option value="opcion3" <?php if(isset($_REQUEST['selectorLista'])){if($aErrores['selectorLista'] == NULL && $_REQUEST['selectorLista'] == "opcion3"){ echo "selected";}} ?>>Opcion 3</option>
                        </select>
                   
                    <?php
                    if ($aErrores['selectorLista'] != NULL) { echo $aErrores['selectorLista']; }?>
                
           <br><br>
                    <input type="submit" value="Enviar" name="enviar">
            </form>
      </fieldset>  
     
       <?php } ?>
            <footer>CRISTINA  MANJON  LACALLE</footer>
  </body>
</html>