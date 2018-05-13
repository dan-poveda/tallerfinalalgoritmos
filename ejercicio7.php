<!DOCTYPE html>
<html>
  <head>
     <title>Ejercicio 7</title>
  </head>
  <header>
     <h1>Conversión</h1>
  </header>
  <body>
     <form action="#" method="post">
          <section>
              <ul>
                 <li><label>Ingrese los metros a convertir</label>
                 <input type="number" name="metter"></li>
                 <button type="submit">Enviar</button>
              </ul>
          </section>
          <section>
          	<?php
          	   if (isset($_POST['metter'])!=""){
          	   	   $metter = $_POST['metter'];

          	   	   $feet = $metter * 3.28;
          	   	   $in = $metter * 39.37;
          	   	   echo "<li>Los pies convertidos son: ".$feet."</li>";
          	   	   echo "<li>Las pulgadas convertidos son: ".$in."</li>";
          	   }
          	?>
          </section>
     </form>
  </body>
</html>