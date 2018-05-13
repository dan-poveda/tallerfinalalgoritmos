<!DOCTYPE html>
<html>
   <head>
      <title> Ejercicio 6 </title>
   </head>
   <header>
      <h1> Porcentaje de hombres y mujeres </h1>
   </header>
   <body>
   	<form action="#" method="post">
   	  <section>
   	  	   <ul>
   	  	      <li><label>Ingrese el total de hombres del salón</label>
   	  	      <input type="number" name="mans"></li>
   	  	      <li><label>Ingrese el total de mujeres del salón</label>
   	  	      <input type="number" name="womans"></li>
   	  	      <button type="submit"> Enviar </button>
   	  	   </ul>
   	  </section>
   	  <section>
   	  	<?php
   	  	    if(isset($_POST['mans'])!=""){
   	  	    	$mans = $_POST['mans'];
   	  	    	$womans = $_POST['womans'];

   	  	    	$total = $mans + $womans;
   	  	    	$percentMans = ($mans * 100)/$total;
                $percentWomans = ($womans * 100)/$total;

                echo "<li>El porcentaje de hombres es: ".(int)$percentMans."%</li>";
                echo "<li> El porcentaje de mujeres es: ".(int)$percentWomans."%</li>";
   	  	    }
   	  	?>
   	  </section>
   	</form>
   </body>
</html>