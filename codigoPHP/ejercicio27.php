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
                margin-left: 10px;
            }
        input{
                border-radius: 5px;
                margin: 5px;
            }
        input:invalid{
                background-color: lightcoral;
            }
        .texto{
                 font-size: 15px;
                 font-weight: bold;
            }
        fieldset{
                display: inline;
                margin-left: 5%;
            }
    </style> 
 </head>
 <body>
    <h2>Plantilla para tres personas</h2> 
    <?php   
    
      require_once '../core/201020libreriaValidacion.php';    //Para importar la libreria Validación
      
      $entradaOK = true;  //Variable que nos indica que las entradas son correctas
      define("NOOBLIGATORIO", 0); //Defino una contante para decir que no es obligatorio
      define("OBLIGATORIO", 1); //Defino una contante para decir que es obligatorio
      
    for ($numFormulario =1;$numFormulario<=3;$numFormulario++ ){ //Utilizo un for para recorrer el formualrio 3 veces, y la variable numeroFormularios para llevar la cuenta
      
      $aErrores[$numFormulario]= [ 'nombre' => null,  //Creamos el array de errores
                    'sistemaoperativo' => null,
                    'ram' => null,
                    'version' => null,
                    'email' => null,
                    'urlOpcional' => null,
                    'fecha' => null,
                    'dni' => null,
                    'telefonoOpcional' => null,
                    'selectorCheckbox' => null,
                    ];
     
  
      $aFormulario[$numFormulario] =['nombre' => null,  //Creamos el array de errores
                    'sistemaoperativo' => null,
                    'ram' => null,
                    'version' => null,
                    'email' => null,
                    'urlOpcional' => null,
                    'fecha' => null,
                    'dni' => null,
                    'telefonoOpcional' => null,
                    'selectorCheckbox' => null,
                  ];
    }        
    
    
        if (isset($_REQUEST['enviar'])) {        //Si se ha pulsado el boton de enviar entonces :
            for($numFormulario=1;$numFormulario<=3;$numFormulario++){    
           //NOMBRE
                $aErrores[$numFormulario]['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,1,OBLIGATORIO); 
            //SISTEMAOPERATIVO   
                $aErrores[$numFormulario]['sistemaoperativo']= validacionFormularios::comprobarAlfaNumerico($_REQUEST['sistemaoperativo'],100,1,OBLIGATORIO);
            //RAM   
                $aErrores[$numFormulario]['ram']= validacionFormularios::comprobarEntero($_REQUEST['ram'],PHP_INT_MAX, -PHP_INT_MAX, OBLIGATORIO);
            //VERSION    
                $aErrores[$numFormulario]['version']= validacionFormularios::comprobarFloat($_REQUEST['version'],PHP_FLOAT_MAX, -PHP_FLOAT_MAX, OBLIGATORIO);
            //EMAIL    
                $aErrores[$numFormulario]['email']= validacionFormularios::validarEmail($_REQUEST['email'],OBLIGATORIO);
            //URL    
                $aErrores[$numFormulario]['urlOpcional']= validacionFormularios::validarURL($_REQUEST['urlOpcional'],NOOBLIGATORIO);
            //FECHA   
                $aErrores[$numFormulario]['fecha']= validacionFormularios::validarFecha($_REQUEST['fecha'], "01/01/2200", "01/01/1900",OBLIGATORIO);
            //DNI   
                $aErrores[$numFormulario]['dni']= validacionFormularios::validarDni($_REQUEST['dni'],OBLIGATORIO);
            //TELEFONO    
                $aErrores[$numFormulario]['telefonoOpcional']= validacionFormularios::validaTelefono($_REQUEST['telefonoOpcional'],NOOBLIGATORIO);
            //CHECK BOX   
                if(!isset($_REQUEST['selectorCheckbox'])){$aErrores[$numFormulario]['selectorCheckbox'] = "Marca al menos una casilla";}
           
               
            }    
            foreach ($aErrores as $campo) { //recorre el array en busca de mensajes de error
               foreach ($campo as $error) {
                    if ($error != null) {
                        $entradaOK = false; //cambia la condiccion de la variable
                    }
                }
            }
                 
            }else{                                         //Si el formulario no estaba completo, tambien cambiamos la entrada a false                                            
                 $entradaOK = false;
            }
       
            if($entradaOK){ 
                foreach($aFormulario as $numFormulario => $numPersona){
                // Cargamos en el $aFormulario el valos de aquellos campos que se han rellenado correctamente
                //NOMBRE
                        $aFormulario[$numFormulario]['nombre']=$_REQUEST['nombre']; 
                //SISTEMAOPERATIVO  
                        $aFormulario[$numFormulario]['sistemaoperativo']=$_REQUEST['sistemaoperativo'];
                //RAM       
                        $aFormulario[$numFormulario]['ram']=$_REQUEST['ram'];
                //VERSION
                        $aFormulario[$numFormulario]['version']=$_REQUEST['version'];
                //EMAIL        
                        $aFormulario[$numFormulario]['email']=$_REQUEST['email'];
                //URL  
                       $aFormulario[$numFormulario]['urlOpcional']=$_REQUEST['urlOpcional']; 
                //FECHA  
                       $aFormulario[$numFormulario]['fecha']=$_REQUEST['fecha']; 
                //DNI        
                       $aFormulario[$numFormulario]['dni']=$_REQUEST['dni'];
                //TELEFONO        
                       $aFormulario[$numFormulario]['telefonoOpcional']=$_REQUEST['telefonoOpcional'];
                //CHECK BOX   
                       $aFormulario[$numFormulario]['selectorCheckbox'] = $_REQUEST['selectorCheckbox'];
              
                     
                     
                // Mostramos los valores de cada campo obligatorio
                       
                echo "<h3>Datos de la persona </h3>";                                               //O B L I G A T O R I O S
                echo "Nombre: " . $aFormulario[$numFormulario]['nombre'] . "<br>";                        //ALFABETICO
                echo "SO: " . $aFormulario[$numFormulario]['sistemaoperativo'] . "<br>";                  //ALFANUMERICO
                echo "Ram: " . $aFormulario[$numFormulario]['ram'] . "<br>";                              //ENTERO
                echo "Version: " . $aFormulario[$numFormulario]['version'] . "<br>";                      //FLOAT
                echo "Email: " . $aFormulario[$numFormulario]['email'] . "<br>";                          //EMAIL
                echo "Fecha: " . date('d/m/Y', strtotime($aFormulario[$numFormulario]['fecha'])) . "<br>";//FECHA
                echo "DNI: " . $aFormulario[$numFormulario]['dni'] . "<br>";                              //DNI      
                echo "Checkbox: ";                                                            //LISTA
                if(isset($aFormulario[$numFormulario]['selectorCheckbox']['DAW'])){
                    echo $aFormulario[$numFormulario]['selectorCheckbox']['DAW'] . " ";
                }
                if(isset($aFormulario[$numFormulario]['selectorCheckbox']['DAM'])){
                    echo $aFormulario[$numFormulario]['selectorCheckbox']['DAM'] . " ";
                }
                if(isset($aFormulario[$numFormulario]['selectorCheckbox']['ASIR'])){
                    echo $aFormulario[$numFormulario]['selectorCheckbox']['ASIR'];
                }
           
                // Si los campos opcionales se han rellenado se muestran, sino no
                                                                       // O P C I O N A L E S
               
                if($aFormulario[$numFormulario]['urlOpcional'] != null){                                                         //URL
                    echo "URL opcional: " . $aFormulario[$numFormulario]['urlOpcional'] . "<br>";
                }
                if($aFormulario[$numFormulario]['telefonoOpcional'] != null){                                                   //TELEFONO
                    echo "Telefono opcional: " . $aFormulario[$numFormulario]['telefonoOpcional'] . "<br>";
                }
                 
            }
             
            }else {         //Codigo que se ejecuta antes de rellenar el formulario o hay errores al enviar
       ?>  
     
        <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            
         <?php  for($numFormulario = 1; $numFormulario <= 3; $numFormulario++){ ?>
            
           <fieldset style="width:20%">   
               <legend><h3>Formulario <?php echo $numFormulario?></h3></legend>
              
        <!---------------------------- NOMBRE -------------------------------------------->
                <label class="texto">Nombre: </label>
                    <input type = "text" class="obligatorio" name = "nombre" value=
                        "<?php if($aErrores[$numFormulario]['nombre'] == NULL && isset($_REQUEST[$numFormulario]['nombre'])){ echo $_REQUEST[$numFormulario]['nombre'];}?>">
                        <?php if ($aErrores[$numFormulario]['nombre'] != null) { echo "  ⚠️".$aErrores[$numFormulario]['nombre']."<br>"; } ?> <br>
                        
        <!---------------------------- SO -------------------------------------------->        
                <label class="texto">Sistema Operativo: </label>
                    <input type = "text" class="obligatorio" name = "sistemaoperativo" value=
                        "<?php if($aErrores[$numFormulario]['sistemaoperativo'] == NULL && isset($_REQUEST[$numFormulario]['sistemaoperativo'])){ echo $_REQUEST[$numFormulario]['sistemaoperativo'];}?>">
                        <?php if ($aErrores[$numFormulario]['sistemaoperativo'] != null) { echo "  ⚠️".$aErrores[$numFormulario]['sistemaoperativo']."<br>"; } ?> <br>
  
        <!---------------------------- RAM -------------------------------------------->        
                <label class="texto">Ram de tu pc: </label>
                    <input type = "number" class="obligatorio" name = "ram" value=
                        "<?php if($aErrores[$numFormulario]['ram'] == NULL && isset($_REQUEST[$numFormulario]['ram'])){ echo $_REQUEST[$numFormulario]['ram'];}?>">
                        <?php if ($aErrores[$numFormulario]['ram'] != null) { echo "   ⚠️".$aErrores[$numFormulario]['ram']."<br>"; } ?> <br>

        <!---------------------------- VERSION -------------------------------------------->        
                <label class="texto">Version de tu SO: </label>
                    <input type = "text" class="obligatorio" name= "version" value=
                        "<?php if($aErrores[$numFormulario]['version'] == NULL && isset($_REQUEST[$numFormulario]['version'])){ echo $_REQUEST[$numFormulario]['version'];}?>">
                        <?php if ($aErrores[$numFormulario]['version'] != null) { echo "⚠️".$aErrores[$numFormulario]['version']."<br>"; } ?> <br>
               
        <!---------------------------- EMAIL -------------------------------------------->        
                <label class="texto">Email: </label>
                    <input type = "email" class="obligatorio" name = "email" value=
                        "<?php if($aErrores[$numFormulario]['email'] == NULL && isset($_REQUEST[$numFormulario]['email'])){ echo $_REQUEST[$numFormulario]['email'];}?>">
                        <?php if ($aErrores[$numFormulario]['email'] != null) { echo "   ⚠️".$aErrores[$numFormulario]['email']."<br>"; } ?> <br>
          
        <!---------------------------- URL -------------------------------------------->        
                <label>Url Opcional: </label>
                    <input type = "url" name = "urlOpcional" value=
                        "<?php if($aErrores[$numFormulario]['urlOpcional'] == NULL && isset($_REQUEST[$numFormulario]['urlOpcional'])){ echo $_REQUEST[$numFormulario]['urlOpcional'];}?>">
                        <?php if ($aErrores[$numFormulario]['urlOpcional'] != null) { echo "   ⚠️".$aErrores[$numFormulario]['urlOpcional'] ; } ?> <br>
                        
        <!---------------------------- FECHA -------------------------------------------->        
                <label class="texto">Fecha: </label>
                    <input type = "date" class="obligatorio" name = "fecha" value=
                        "<?php if($aErrores[$numFormulario]['fecha'] == NULL && isset($_REQUEST[$numFormulario]['fecha'])){ echo $_REQUEST[$numFormulario]['fecha'];}?>">
                        <?php if ($aErrores[$numFormulario]['fecha'] != null) { echo "   ⚠️".$aErrores[$numFormulario]['fecha']."<br>"; } ?> <br>

        <!---------------------------- DNI -------------------------------------------->        
                <label class="texto">Dni: </label>
                    <input type = "text" class="obligatorio" name = "dni" value=
                        "<?php if($aErrores[$numFormulario]['dni'] == NULL && isset($_REQUEST[$numFormulario]['dni'])){ echo $_REQUEST[$numFormulario]['dni'];}?>">
                        <?php if ($aErrores[$numFormulario]['dni'] != null) { echo "   ⚠️".$aErrores[$numFormulario]['dni']."<br>"; } ?> <br>
                        
        <!---------------------------- TELEFONO -------------------------------------------->        
                <label>Telefono Opcional: </label>
                    <input type = "tel" name = "telefonoOpcional" value=
                        "<?php if($aErrores[$numFormulario]['telefonoOpcional'] == NULL && isset($_REQUEST[$numFormulario]['telefonoOpcional'])){ echo $_REQUEST[$numFormulario]['telefonoOpcional'];}?>">
                        <?php if ($aErrores[$numFormulario]['telefonoOpcional'] != null) { echo "   ⚠️".$aErrores[$numFormulario]['telefonoOpcional'] ; } ?>  <br>          
        
        <!---------------------------- CHECK BOX -------------------------------------------->                   
                <label for="checkbox">CheckBox: </label><br><br>
                        <input type="checkbox" id="CO1" name="selectorCheckbox[DAW]" value="DAW" <?php if(isset($_REQUEST[$numFormulario]['selectorCheckbox']['DAW'])){ echo 'checked';} ?>>
                            <label for="CO1">DAW</label><br/>
                        <input type="checkbox" id="CO2" name="selectorCheckbox[DAM]" value="DAM" <?php if(isset($_REQUEST[$numFormulario]['selectorCheckbox']['DAM'])){ echo 'checked';} ?>>
                            <label for="CO2">DAM</label><br/>
                        <input type="checkbox" id="CO3" name="selectorCheckbox[ASIR]" value="ASIR" <?php if(isset($_REQUEST[$numFormulario]['selectorCheckbox']['ASIR'])){ echo 'checked';} ?>>
                            <label for="CO3">ASIR</label><br/>
                        <?php if ($aErrores[$numFormulario]['selectorCheckbox'] != NULL) { echo "   ⚠️".$aErrores[$numFormulario]['selectorCheckbox']; }?>     
                  
           <br><br>
                   
                </fieldset> 
             <?php } ?>
            <br>
             <input type="submit" value="Enviar" name="enviar">
         </form>

       <?php } ?>
            <footer>CRISTINA  MANJON  LACALLE</footer>
  </body>
</html>