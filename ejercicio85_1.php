<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 85</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
</head>
<BODY background="../Images/Imagen7.png" class= "text-center">
	<section>		
		<h1>Ejercicio 85</h1>
		<form action= "#" method="post">
			<li>
				<label>Ingrese la superficie del departamento que desea (En M2):</label>
				<input type="text" name="searchS">
			</li>
			<li>
				<label>Ingrese el precio del departamento que desea:</label>
				<input type="text" name="searchPriceS">
			</li>
			<li>
				<button type="submit">Consultar</button>
			</li>
			<li>
				<br><a href="../Index.php" class ="button-volver">Volver</a></br>
			</li>
			<?php
				if (isset($_POST['searchS']) != "" && isset($_POST['searchPriceS']) != "") {
					$searchS = $_POST['searchS'];
					$searchPriceS = $_POST['searchPriceS'];			
					$quantityD = $_POST['quantityD'];
					for ($i=0; $i < $quantityD; $i++) { 
			        	$surfaceD[$i] = $_POST['surfaceD'.$i];
			        	$priceD[$i] = $_POST['priceD'.$i];
					}
					for ($i=0; $i < $quantityA; $i++) { 
						if ($searchS == $surfaceD[$i]) {
							$surfaceD[$i] == 'Alquilado';
						}
						if ($searchPriceS == $priceD[$i]) {
							$priceD[$i] == 'Alquilado';
						}
					}
				}
			?>
		</form>
	</section>
</body>
</html>