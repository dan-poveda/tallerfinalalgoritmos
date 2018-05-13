<!DOCTYPE html>
<html>
<head>
	<title> EJERCICIO 1 </title>
</head>
<body>
	<h1>EJERCICIO 1</h1>
	<h2><li>Obtener el promedio de edad de tres personas.</li></h2>
<form action="#" method="post">
<ul>
	<li><label> Ingrese la edad  </label>
	<input type="text" name="number1">
	
	<li><label> Ingrese la edad </label>
	<input type="text" name="number2">
	
	<li><label> Ingrese la edad </label>
	<input type="text" name="number3">
	<button type="submit"> enviar</button> 
</ul>
</form>
</li>
<section>
	<?php
	if(isset($_POST['number1'])!=""){
		$number1= $_POST['number1'];
		$number2= $_POST['number2'];
		$number3= $_POST['number3'];

		$adition = $number1+$number2+$number3;
		$average = $adition/3;
	
		echo "El promedio es: ".$average;
}
		
	?>
</section>
</body>	
</html>