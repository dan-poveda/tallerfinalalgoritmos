<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 39 </TITLE>
	</head>
	<BODY>
		<H1> Compra </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese la cantidad de dinero que cuestan la casa y el auto:</label>
				<input type = "text" name = "value">	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['value']) != ""){			
						$value = $_POST['value'];
						$devaluation = ($value * 0.15) * 3;
						$evaluation = $value * 0.032;
						$half = $evaluation / 2;
						if ($devaluation > $half) {
							echo "Se recomienda no comprar el automovil. Deberia comprar el terreno";
						}
						else{
							echo "Se recomienda comprar el auto";
						}
					}
				?>
			</section>
	</BODY>
</html>