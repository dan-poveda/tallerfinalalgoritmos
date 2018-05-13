<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 24 </TITLE>
	</head>
	<BODY>
		<H1> Concepto de interes </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el capital a invertir es:</label>
				<input type = "text" name = "number1" >	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['number1']) != ""){			
						$number1 = $_POST['number1'];
						$interest = $number1 * 0.02;
						echo "El Dinero Ganado Es: ".$interest;									
						if ($interest > 7000) {
							$total = $number1 + $interest;
							echo "<br>El dinero total de su cuenta es: ".$total;
							echo "<br>Se han invertido los intereses!";
						}
						else {
							echo "El dinero total de su cuenta es: ".$number1;
						}									
					}
				?>
			</section>
	</BODY>
</html>