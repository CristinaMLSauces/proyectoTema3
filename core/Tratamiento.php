
<!Doctype HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       
    </head>
    <body>
        
       <?php 
       /*Autor: Cristina Manjon Lacalle */
       
       $nombre = $_POST['nombre'];     //Creo una variable(que se puede llamar como yo quiera), y le asigno lo que ha recogido el $_POST con el name de 'nombre' 
       $codigo = $_POST['dni'];
       $estudio = $_POST['estudio'];
       $fecha = $_POST['fecha'];
       $Boolean = $_POST['boolean'];
       
       echo "Sus tres primeras cifras son $codigo, su nombre es $nombre,estudias $estudio, hoy es $fecha y $Boolean te gusta el curso " ; //Muestro las variables, que son datos del formulario
       
       
       
       ?>
    
   
      
    </body>
</html>
