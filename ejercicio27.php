<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 27 </TITLE>
	</head>
	<BODY>
		<H1> Analizando tres valores </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor numero 1 :</label>
				<input type = "text" name = "value1" >	
			</li>
			<li>
				<label> Ingrese el valor numero 2 :</label>
				<input type="text" name ="value2">
			</li>
			<li>
				<label> Ingrese el valor numero 3 :</label>
				<input type="text" name ="value3">
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['value1']) != "" && isset($_POST['value2']) != "" && isset($_POST['value3']) !=""){			
						$value1 = $_POST['value1'];
						$value2 = $_POST['value2'];
						$value3 = $_POST['value3'];
						$areaTriangle = ($value1 * $value2) / 2;
						$areaCircle = ($value1 * ($value2 * $value2));
						$areaRectangle = ($value1 * $value2);
						if ($value3 == $areaTriangle) {
							echo "<br>La figura es un triangulo";
						}
						elseif ($value3 == $areaCircle && $value1 == 3.14) {
							echo "<br>La figura es un circulo";	
						}
						elseif ($value3 == $areaRectangle) {
							echo "<br>La figura es un rectangulo";	
						}
					}
				?>
			</section>
	</BODY>
</html>