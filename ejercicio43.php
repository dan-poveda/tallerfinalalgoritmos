<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 43 </TITLE>
	</head>
	<BODY>
		<H1> Decisiones financieras </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor del capital ya sea positivo o negativo:</label>
				<input type = "text" name = "capital">	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['capital']) != ""){			
						$capital = $_POST['capital'];
						if ($capital < 0) {
							$aditionLoan = -($capital);
							$loan = 10000 + $aditionLoan; 
							$capital = $loan + $capital;
							$budgetCalculation = $capital * 0.5;
							$budgetFurniture = $capital * 0.2;
							$budgetSupplies = $capital * 0.15;
							$budgetIncentives= $capital * 0.15;
							echo "Presupuesto para la compra de insumos sera de: ".$budgetSupplies;
							echo "<br>Presupuesto para otorgar insentivos al personal sera de: ".$budgetIncentives;
							echo "<br>La cantidad que se le pediria al banco seria de: ".$loan;
						}
						elseif ($capital < 20000) {
							$loan = 20000 - $capital; 
							$capital = 20000;
							$budgetCalculation = $capital * 0.5;
							$budgetFurniture = $capital * 0.2;
							$budgetSupplies = $capital * 0.15;
							$budgetIncentives= $capital * 0.15;
							echo "Presupuesto para la compra de insumos sera de: ".$budgetSupplies;
							echo "<br>Presupuesto para otorgar insentivos al personal sera de: ".$budgetIncentives;
							echo "<br>La cantidad que se le pediria al banco seria de: ".$loan;
						}
						elseif ($capital == 20000) {
							$capital = 20000;
							$budgetCalculation = $capital * 0.5;
							$budgetFurniture = $capital * 0.2;
							$budgetSupplies = $capital * 0.15;
							$budgetIncentives= $capital * 0.15;
							echo "Presupuesto para la compra de insumos sera de: ".$budgetSupplies;
							echo "<br>Presupuesto para otorgar insentivos al personal sera de: ".$budgetIncentives;
						}
						elseif ($capital > 20000) {
							$budgetCalculation = $capital * 0.5;
							$budgetFurniture = $capital * 0.2;
							$budgetSupplies = $capital * 0.15;
							$budgetIncentives= $capital * 0.15;
							echo "Presupuesto para la compra de insumos sera de: ".$budgetSupplies;
							echo "<br>Presupuesto para otorgar insentivos al personal sera de: ".$budgetIncentives;
						}
					}	
				?>
			</section>
	</BODY>
</html>