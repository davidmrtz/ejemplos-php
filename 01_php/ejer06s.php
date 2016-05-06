<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Curso de PHP | mayo de 2010 | ejer06.php</title>
    <link rel="stylesheet" type="text/css" media="screen" href="ejer06.css" />
    <link rel="stylesheet" type="text/css" media="print" href="ejer06p.css" />
  </head>
  <body>
    <h1>Ejercicio 6</h1>
    <p>Añadir una hoja de estilos CSS al fichero del ejercicio 5, de modo que
    la tabla y el resto de los elementos tengan un aspecto más "presentable".</p>
    <p>Para facilitar la lectura, queremos que las filas pares de la tabla sean
    de color gris y las impares blancas. El resto del aspecto queda a vuestra
    elección.</p>

    <h2>El formulario</h2>
    <form action="ejer06s.php" method="get">
      <input type="text" id="N" name="N" value="" />
      <input type="text" id="I" name="I" value="" />
      <input type="text" id="F" name="F" value="" />
      <input type="submit" id="enviar" name="enviar" value="Enviar" />
    </form>

    <table>
    <?php 
      $N = $_GET['N'];
      $I = $_GET['I'];
      $F = $_GET['F'];
      
      $fila=1;
      for( $i=$I; $i<=$F ; $i++ )
      {
        $r = $N*$i;
        
        if( $fila%2==0 )
          echo "<tr class='par'>";          
        else
          echo "<tr>";
        
        echo "<td>$N</td><td>$i</td><td>$r</td></tr>";
        
        $fila++;
      }
    ?>
    </table>
  </body>
</html>