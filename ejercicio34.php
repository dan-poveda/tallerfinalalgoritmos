<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicios 34 </TITLE>
	</head>
	<BODY>
		<H1> Categorias y sueldos </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese la categoria</label>
				<input type = "text" name = "category">	
			</li>			
			<li>
				<label> Ingrese el sueldo del trabajador:</label>
				<input type = "text" name = "valueSalary">	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['category']) != "" && isset($_POST['valueSalary']) != ""){			
						$category = $_POST['category'];
						$valueSalary = $_POST['valueSalary'];
						if ($category == 1) {
							$adition = $valueSalary * 0.15;
							$totalSalary = $valueSalary + $adition;
							echo "La categoria del trabajador es: ".$category;
							echo "<br>El nuevo salario del trabajador es: ".$totalSalary;
						}
							elseif ($category == 1) {
								$adition = $valueSalary * 0.15;
								$totalSalary = $valueSalary + $adition;
								echo "La categoria del trabajador es: ".$category;
								echo "<br>El nuevo salario del trabajador es: ".$totalSalary;
							}
								elseif ($category == 2) {
									$adition = $valueSalary * 0.1;
									$totalSalary = $valueSalary + $adition;
									echo "La categoria del trabajador es: ".$category;
									echo "<br>El nuevo salario del trabajador es: ".$totalSalary;
								}
									elseif ($category == 3) {
										$adition = $valueSalary * 0.08;
										$totalSalary = $valueSalary + $adition;
										echo "La categoria del trabajador es: ".$category;
										echo "<br>El nuevo salario del trabajador es: ".$totalSalary;
									}
										elseif ($category == 4) {
											$adition = $valueSalary * 0.07;
											$totalSalary = $valueSalary + $adition;
											echo "La categoria del trabajador es: ".$category;
											echo "<br>El nuevo salario del trabajador es: ".$totalSalary;;
										}
					}
				?>
			</section>
	</BODY>
</html>