<!DOCTYPE html>
<html>
  <head>
     <title> Ejercicio 8 </title>
  </head>
  <header>
     <h1> Área de triangulo </h1>
  </header>
  <body>
  	<form action="#" method="post">
  	 <section>
  	 	<ul>
  	 	  <li><label>Ingrese el lado a</label>
  	 	  <input type="number" name="a"></li>
  	      <li><label> Ingrese el lado b</label>
  	      <input type="number" name="b"></li>
  	      <li><label> Ingrese el lado c</label>
  	      <input type="number" name="c"></li>
  	      <button type="submit">Enviar</button>
        </ul>
  	 </section>
  	 <section>
  	 	<?php
  	 	   if (isset($_POST['a'])!=""){
  	 	   	  $a= $_POST['a'];
  	 	   	  $b= $_POST['b'];
  	 	   	  $c= $_POST['c'];

  	 	   	  $p = ($a+$b+$c)/2;
  	 	   	  $solution1 = ($p-$a)*($p-$b)*($p-$c);
  	 	   	  $solution = sqrt($solution1);
  	 	   	  echo "El área del triangulo es de: ".$solution;
  	 	   	}
  	 	?>
  	 </section>
  </body>
  </form>
</html>