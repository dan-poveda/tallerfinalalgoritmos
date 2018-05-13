<!DOCTYPE html>
<html>
   <head>
   	 <title>Ejercicio 9</title>
   </head>
   <header>
   	  <h1>Salario neto</h1>
   </header>
   <form action="#" method="post">
   	 <body>
   	 	  <section>
   	 	      <ul>
   	 		     <li><label>Ingrese el precio de la hora</label>
   	 		     <input type="number" name="priceHour"></li>
   	 		     <li><label>Ingrese las horas trabajadas</label>
   	 		     <input type="number" name="hour"></li>
   	 		     <button type="submit">Enviar</button>
   	 	      </ul>
   	      </section>
          <section>
          	 <?php
          	     if(isset($_POST['priceHour'])!=""){
          	     	$priceHour = $_POST['priceHour'];
          	     	$hour = $_POST['hour'];

          	     	$baseSalary = $priceHour * $hour;
          	     	$netSalary = $baseSalary * 0.20;
          	     	echo "El salario neto es de: ".$netSalary;
          	     }
          	    ?>
          </section>
   	 </body>
   </form>
</html>