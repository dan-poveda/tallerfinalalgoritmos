<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 60</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 60</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Factura</h4>
				<label>Digite el costo de su factura</label><br>
				<input type="number" name="COS"><br>
				<label>Digite cuantos dias paso despues de la compra</label><br>
				<input type="number" name="DA"><br>
				<button type="submit">Ingresar datos</button> <br>
			</section>
		</form>
		<section>
			<?php
				if (isset($_POST['COS'])) {
				 	$COS = $_POST['COS'];
				 	$DA = $_POST['DA'];
				 	if ($DA > 60) {
	 					$M = $COS * 8 / 100;
	 					$P = $COS + $M;
	 					echo "El costo que tiene que pagar de mora es de " . $M . "<br>";
	 					echo "El costo que tiene que pagar es de " . $P;
	 				}else{
	 				if (($DA > 31) && ($DA <= 59)) {
	 					$M = $COS * 6 / 100;
	 					$P = $COS + $M;
	 					echo "El costo que tiene que pagar de mora es de " . $M . "<br>";
	 					echo "El costo que tiene que pagar es de " . $P;
	 				}else{
	 					if ($DA < 15) {
	 						$M = $COS * 2 / 100;
	 						$P = $COS - $M;
	 						echo "El costo que tiene que pagar de mora es de " . $M . "<br>";
	 						echo "El costo que tiene que pagar es de " . $P;
	 					}
	 				}
					} 
				}
			?>
		</section>
	</body>
</html>