<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
      
    </head>
    <body>
        <?php
            if (isset($_POST['enviar'])) {           //isset comprueba que le he dado al boton , si le he dado me muestra lo siguiente
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $localidad = $_POST['localidad'];
                print "Su nombre es: ".$nombre."<br />";
                print "Su apellido es: ".$apellido."<br />";
                foreach($localidad as $zona){
                    print "La localidad es $zona";
                }
                
            }else {                                   //si el isset no esta pulsado se ejecutara esto
           ?>
      <fieldset>
        <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">   <!-- echo $_SERVER['PHP_SELF'] esto significa -->
            NOMBRE: <input type="text" name="nombre" ><br><br>
            APELLIDO <input type="text" name="apellido" ><br><br>
            
        <input type="checkbox" name="localidad[]" value="Benavente" >
        Benavente<br>
        <input type="checkbox" name="localidad[]" value="Zamora" >
        Zamora<br>
        <input type="checkbox" name="localidad[]" value="Zamora" >
        Pueblos<br><br>
        <input type="submit" value="Enviar" name="enviar">
        
      </fieldset>
</form>
<?php
}
?>
    
        
        
    </body>
</html>
