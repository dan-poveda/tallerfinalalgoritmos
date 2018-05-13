<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 46 </TITLE>
	</head>
	<BODY>
		<H1> Enteros positivos </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor de (N)</label>
				<input type = "text" name = "N">	
			</li>
			<li>
				<label> Ingrese el valor de (K)</label>
				<input type = "text" name = "K">	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['N']) != "" && isset($_POST['K']) != ""){			
						$N = $_POST['N'];
						$K = $_POST['K'];
						if ($K < $N) {
							for ($i= $N; $i >= $K ; $i--) { 
								echo "<br>El valor de (N) es: ".$i;
							}
						}
							
					}	
				?>
			</section>
	</BODY>
</html>