<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 32 </TITLE>
	</head>
	<BODY>
		<H1> Valores enteros </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese El Valor De (P):</label>
				<input type = "text" name = "P">	
			</li>			
			<li>
				<label> Ingrese el valor de (Q):</label>
				<input type = "text" name = "Q">	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['P']) != "" && isset($_POST['Q']) != "" ){			
						$P = $_POST['P'];
						$Q = $_POST['Q'];
						$potencyP2 = $P * $P;
						$potencyP3 = ($P * $P) * $P;
						$potencyQ4 = (($Q * $Q)* $Q) * $Q;
						$total = $potencyP3 + $potencyQ4 - 2 * $potencyP2;
						if ($total > 680) {
							echo "El valor de (P) es: ".$P;
							echo "<br>El valor de (Q) es: ".$Q;
						}
							else{
								echo "El resultado es menor que 680";
							}
						
					}
					
				?>
			</section>
	</BODY>
</html>