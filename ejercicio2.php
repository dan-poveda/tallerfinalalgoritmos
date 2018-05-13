<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<h1>EJERCICIO 2</h1>
	<h2><li>Suponga que un individuo decide invertir su capital en un banco y desea saber cuánto dinero ganará después de un mes si el banco paga a razón de 2% mensual.</li></h2>
	<form action="#" method="post">
<ul>
	<li><label> Digite la cantidad que va a invertir</label></li>
	<input type="number" name="capital">
	<button type="submit"> enviar</button> 
</ul>
</form>
<section>
	<?php
	if(isset($_POST['capital'])!=""){
		$capital= $_POST['capital'];
		$average=($capital*2)/100;
		echo "El dinero ganado por mes es:".$average;
	}

		
	?>
</section>
</body>	
</html>