<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Curso de PHP | mayo de 2010 | ejer02.php</title>
  </head>
  <body>
    <h1>Ejercicio 2</h1>
    <p>Hacer un formulario que recoja los dos valores A y B del ejercicio 
    anterior (y haga la comparación...).</p>

    <h2>El formulario</h2>
    <form action="ejer02sbis.php" method="get">
      <input type="text" id="A" name="A" value="" />
      <input type="text" id="B" name="B" value="" />
      <input type="submit" id="enviar" name="enviar" value="Enviar" />
    </form>

    <?php 
    if(isset($_GET['enviar'])) 
    { 
	    echo "<h2>El resultado</h2>";
	    echo "<p>";
	    
      $A=0;
      if( isset( $_GET['A'] ) )
        $A = $_GET['A'];
      
      $B=0;
      if( isset( $_GET['B'] ) )
        $B = $_GET['B'];
            
      if( $A > $B )
      {
        echo "$A es mayor que $B";
      }
      else
        if( $A < $B )
          echo "$A es menor que $B";
        else
          echo "$A y $B son iguales";
    
      echo "</p>";
    } ?>
  </body>
</html>