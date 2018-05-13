<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 45 </TITLE>
	</head>
	<BODY>
		<H1> Ecuación de segundo grado </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor de (A)</label>
				<input type = "text" name = "A">	
			</li>
			<li>
				<label> Ingrese el valor de (B)</label>
				<input type = "text" name = "B">	
			</li>
			<li>
				<label> Ingrese el valor de (C)</label>
				<input type = "text" name = "C">	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['A']) != "" && isset($_POST['B']) != "" && isset($_POST['C']) != ""){			
						$A = $_POST['A'];
						$B = $_POST['B'];
						$C = $_POST['C'];
						$D = ($B * $B) - 4 * $A * $C;	
						if ($D == 0) {
							$X1 = $X2 = -($B) / (2 * $A);
							echo "El resultado es: ".$X1;
						}
						elseif ($D > 0) {
							$X1 = (-($B + sqrt(($B * $B) - 4 * $A * $C))) / (2 * $A);
							$X2 = (-($B - sqrt(($B * $B) - 4 * $A * $C))) / (2 * $A);
							echo "El resultado es: ".$X1;
							echo "<br>El resultado es: ".$X1;
						}
						elseif ($D < 0) {
							echo "No tiene solucion en los numero reales";
						}
					}	
				?>
			</section>
	</BODY>
</html>