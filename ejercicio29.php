<!DOCTYPE html>
<html>
	<head> 
		<TITLE> EJERCICIO 29 </TITLE>
	</head>
	<BODY>
		<H1> Empresa comercializadora de cosmeticos </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese total de las ventas realizadas por el eepartamento 1:</label>
				<input type = "text" name = "departament1">	
			</li>			
			<li>
				<label> Ingrese total de las ventas realizadas por el departamento 2:</label>
				<input type = "text" name = "departament2">	
			</li>	
			<li>
				<label> Ingrese total de las ventas realizadas por el departamento 3:</label>
				<input type = "text" name = "departament3" >	
			</li>	
			<li>
				<label> Ingrese salario de los trabajadores:</label>
				<input type = "text" name = "salary" >	
			</li>							
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['departament1']) != "" && isset($_POST['departament2']) != "" && isset($_POST['departament3']) != "" && isset($_POST['salary']) != "" ){			
						$departament1 = $_POST['departament1'];
						$departament2 = $_POST['departament2'];
						$departament3 = $_POST['departament3'];
						$salary = $_POST['salary'];
						$totalSales = $departament1 + $departament2 + $departament3;
						$percentage = $totalSales * 0.33;
						$adition = $salary * 0.2;
						if ($departament1 > $percentage) {							
							$salary1 = $salary + $adition;
							echo "El salario de los vendedores del departamento 1 es: ".$salary1;
							echo "<br>El salario de los vendedores del departamento 2 es: ".$salary;
							echo "<br>El salario de los vendedores del departamento 3 es: ".$salary;
						}
						elseif ($departament2 > $percentage) {
							$salary2 = $salary + $adition;
							echo "El salario de los vendedores del departamento 1 es: ".$salary;
							echo "<br>El salario de los vendedores del departamento 2 es: ".$salary2;
							echo "<br>El salario de los vendedores del departamento 3 es: ".$salary;
						}
						elseif ($departament3 > $percentage) {
							$salary3 = $salary + $adition;
							echo "El salario de los vendedores del departamento 1 es: ".$salary;
							echo "<br>El salario de los vendedores del departamento 2 es: ".$salary;
							echo "<br>El salario de los vendedores del departamento 3 es: ".$salary3;
						}
					}
				?>
			</section>
	</BODY>
</html>