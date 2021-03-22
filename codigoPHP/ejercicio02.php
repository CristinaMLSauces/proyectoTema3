<!Doctype HTML>
<html>
    <head>
        <title>Cristina Manjon</title>
        <meta charset="UTF-8">
        <meta name="author" content="Cristina Manjon Lacalle">
 
        
    </head>
    <body>
        
       <?php                            //Guardo en la variable $hola un heredoc que se abre con <<<EOT y se cierra con EOT; 
        $hola = <<<EOT
        mi primer heredoc 
        EOT;
        
        echo <<<EOT
        Hola este es  $hola <br>
        EOT;
                                        //Para mostrar el heredoc uso echo y luego muestro un heredoc con la variable que contiene otro heredoc.
        
        $sql = <<<SQL
        SELECT * FROM table
        SQL;
                                        //Tambien podemos guardar en un heredoc sentencias SQL
        echo <<<EOT
        Esto es una sentencia sql guardada con heredoc, $sql
        EOT;
                                        //Mostramos la sentencia con echo
                
                
        //-------- Ultima modificacion 22-03-2021 -------
       ?>                               
         
    </body>
</html>

