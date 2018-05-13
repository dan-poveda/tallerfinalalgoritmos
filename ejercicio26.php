<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 26 </TITLE>
	</head>
	<BODY>
		<H1> Datos A, B, C, D </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor de (A) :</label>
				<input type = "text" name = "A" >	
			</li>
			<li>
				<label> Ingrese el valor de (B) :</label>
				<input type="text" name="B">
			</li>
			<li>
				<label> Ingrese el valor de (C) :</label>
				<input type="text" name="C">
			</li>
			<li>
				<label> Ingrese el valor de (D) :</label>
				<input type="text" name="D">
			</li>
			<li>
				<button type= "submit"> Enviar </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['A']) != "" && isset($_POST['B']) != "" && isset($_POST['C']) != "" && isset($_POST['D']) != ""){			
						$A = $_POST['A'];
						$B = $_POST['B'];
						$C = $_POST['C'];
						$D = $_POST['D'];
						if ($D == 0) {
							$total1 = ($A - $C);
							$potency = $total1 * $total1;
							echo "<br>EL resultado es: ".$potency;
						}
						else if ($D > 0) {
							$total2 = ($A - $B);
							$potency3 = ($total2 * $total2* $total2) / $D;
							echo "<br>EL resultado es: ".$potency3;
						} 									
					}
				?>
			</section>
	</BODY>
</html>