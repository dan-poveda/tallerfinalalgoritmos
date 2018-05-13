<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 25 </TITLE>
	</head>
	<BODY>
		<H1> Sueldo de un trabajador </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el sueldo del trabajador:</label>
				<input type = "text" name = "salary" >	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['salary']) != ""){			
						$salary = $_POST['salary'];
						if ($salary < 40000) {
							$adition = $salary * 0.15;
							$totalSalary = $salary + $adition;
							echo "<br>El nuevo sueldo del trabajador es: ".$totalSalary;
						}
						else if ($salary >= 40000) {
							$adition = $salary * 0.12;
							$totalSalary = $salary + $adition;
							echo "<br>El nuevo sueldo del trabajador es: ".$totalSalary;	
						} 									
					}
				?>
			</section>
	</BODY>
</html>