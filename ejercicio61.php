<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 61</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 61</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Multiplicacion rusa</h4>
				<label>Digite el multiplicador</label><br>
				<input type="number" name="MULTIPLICAD"><br>
				<label>Digite el multiplicando</label><br>
				<input type="number" name="MULTIPLICAN"><br>
				<button type="submit">Ingresar datos</button> <br>
			</section>
		</form>
		<section>
			<?php
				if (isset($_POST['MULTIPLICAD'])) {
				 	$MULTIPLICAD = $_POST['MULTIPLICAD'];
				 	$MULTIPLICAN = $_POST['MULTIPLICAN'];
				 	$TOTAL = 0;
				 	for ($i=0; $MULTIPLICAD >= 1; $i++) { 
				 		if ($MULTIPLICAD % 2 != 0) {
							$TOTAL = $TOTAL + $MULTIPLICAN;
						}	
						$MULTIPLICAN = $MULTIPLICAN * 2;
						$MULTIPLICAD = floor($MULTIPLICAD / 2);
							 		

				 	}
				 	echo "El resultado de la multiplicacion rusa es: " . $TOTAL;

				 	
				 } 
			?>
		</section>
	</body>
</html>