<!DOCTYPE html>
<html>
   <head>
     <title> Ejercicio 4 </title> 
   </head>
   <header>
     <h1> Descuento del 15% </h1>
   </header>
   <form action="#" method="post">
        <body>
          <section>
          	  <ul>
     	         <li><label> Ingrese el total de la compra </label>
     	         <input type="number" name="totalBuy"> </li>
     	         <button type="submit"> Enviar </button>
              </ul>
          </section>
          <section>
          	<?php
          	  if (isset($_POST['totalBuy'])!=""){
          	  	$totalBuy = $_POST['totalBuy'];
          	  	$solution = $totalBuy * 0.15;
          	  	echo "El descuento de la compra en total es ".$solution.".000";
          	  }
          	?>
          </section>
       </body>
   </form>
</html>