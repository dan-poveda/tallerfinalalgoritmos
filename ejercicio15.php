<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 15</TITLE>
	</head>
		
	<BODY>
		<H1> Pagar luz electica </H1>
		<Form Action= "#" method = "post">			
			<br>		
				<label> Ingrese valor lectura anterior:</label>
				<input type = "text" name = "previousReading" >	
			</br>
			<br>		
				<label> Ingrese valor lectura actual:</label>
				<input type = "text" name = "currentReading" >	
			</br>
			<br>		
				<label> Ingrese valor por Kilovatio:</label>
				<input type = "text" name = "valueKilovatio" >	
			</br>
			<br>
				<button type= "submit"> Calcular </button>
			</br>
		</Form>
			<section>
				<?php
					if (isset($_POST['previousReading']) != ""&& isset($_POST['currentReading']) != "" && isset($_POST['valueKilovatio']) != ""){
						$previousReading = $_POST['previousReading'];
						$currentReading = $_POST['currentReading'];	
						$valueKilovatio = $_POST['valueKilovatio'];
						
						$energy = $currentReading - $previousReading;
						$total = $energy * $valueKilovatio;

						echo "El monto a pagar por el mes de luz electrica es: ".round($total);
					}
				?>
			</section>
	</BODY>
</html>