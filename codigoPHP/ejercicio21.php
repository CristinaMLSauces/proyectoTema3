<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
      
    </head>
    <body>
        
     <fieldset title="Formulario">
        <form name="datospersonales" action="../core/Tratamiento.php" method="post">
            <label for="dni">Tres primeros digitos del DNI:</label>
                <input type="number" id="dni" name="dni" ><br><br>
            <label for="nombre">Nombre y apellidos:</label>
                <input type="text" id="nombre" name="nombre" ><br><br>
            <label for="estudio">Que curso estudias y en que centro:</label>
                <input type="textarea" id="estudio" name="estudio" ><br><br>
            <label for="fecha">Dime la fecha de hoy</label>
                <input type="date" id="fecha" name="fecha" ><br><br>
            <label for="boolean">Dime si te gusta el curso (si o no)</label>
                <input type="text" id="fecha" name="boolean" ><br>    
              
 
                <input type="submit" value="Enviar">
        </form>
    </fieldset>
        
        
    </body>
</html>
