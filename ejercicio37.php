<!DOCTYPE html>
<html>
	<head> 
		<TITLE>EJERCICIO 37 </TITLE>
	</head>
	<BODY>
		<H1> Enteros positivos </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese la longitud del lado 1 (+)</label>
				<input type = "text" name = "side1">	
			</li>			
			<li>
				<label> Ingrese la longitud del lado 2 (+)</label>
				<input type = "text" name = "side2">	
			</li>
			<li>
				<label> Ingrese la longitud del lado mayor (3)(+)</label>
				<input type = "text" name = "sideHigher">	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['side1']) != "" && isset($_POST['side2']) != "" && isset($_POST['sideHigher']) != ""){			
						$side1 = $_POST['side1'];
						$side2 = $_POST['side2'];
						$sideHigher = $_POST['sideHigher'];
						$totalSide = $side1 + $side2;
						$S = ($side1 + $side2 + $sideHigher) / 2;
						if ($totalSide >= $sideHigher) {
							$areaTriangle = $S * (($S - $side1) * ($S * $side2) * ($S - $sideHigher));
							echo "Es un triangulo!";
							if ($side1 == $side2 && $side2 == $sideHigher) {
								echo "<br>Es un triangulo equilatero";
								echo "<br>El area del triangulo es: ".sqrt($areaTriangle);
							}
							elseif ($side1 == $side2 && $sideHigher != $side1) {
								echo "<br>Es un triangulo isósceles";
								echo "<br>El area del triangulo es: ".sqrt($areaTriangle);
							}
							elseif ($sideHigher != $side1 || $sideHigher != $side2) {
								echo "<br>Es un triangulo escaleno";
								echo "<br>El area del triangulo es: ".sqrt($areaTriangle);
							}
						}
						else{
							echo "No es un triangulo!";
						}
					}
				?>
			</section>
	</BODY>
</html>