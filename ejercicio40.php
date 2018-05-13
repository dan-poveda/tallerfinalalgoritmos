<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 40 </TITLE>
	</head>
	<BODY>
		<H1> Monte de pago de un suscritor </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese valor de la lectura actual:</label>
				<input type = "text" name = "currentReading">	
			</li>			
			<li>
				<label> Ingrese el valor de la lectura anterior:</label>
				<input type = "text" name = "previousReading">	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['previousReading']) != "" && isset($_POST['currentReading']) != "" ){			
						$previousReading = $_POST['previousReading'];
						$currentReading = $_POST['currentReading'];
						$difference = $currentReading - $previousReading;
						if ($difference >= 0 && $difference <= 100) {
							echo "El monto a pagar es: 2622.00 Bolivares";
						}
						elseif ($difference > 100 && $difference <= 300){
							$total = $difference * 79.78;
							echo "El monto a pagar es de: ".$total." Bolivares";
						}
						elseif ($difference > 300 && $difference <= 500){
							$total = $difference * 89.52;
							echo "El monto a pagar es de: ".$total." Bolivares";
						}
						elseif ($difference > 500){
							$total = $difference * 97.95;
							echo "El monto a pagar es de: ".$total." Bolivares";
						}
					}
				?>
			</section>
	</BODY>
</html>