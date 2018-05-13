<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 87</title>
	
</head>
<BODY>
	<section>		
		<h1>Ejercicio 87</h1>
		<form action="Ejercicio87_2.php" method="post">
			<?php
				$quantityD = $_POST['quantityD'];
				$ticketsM = $_POST['ticketsM'];
				for ($i=0; $i < $quantityD; $i++) { 
		        	$nameS[$i] = $_POST['nameS'.$i];
				}
				for ($i=0; $i < $quantityD; $i++) { 
					?>
						<label>Ingrese el total de ingresos del espectaculo <?php echo $nameS[$i] ?></label>	
						<input type="number" name="valueS<?php echo $i ?>">
						<br>
						<label>Ingrese la cantidad de asistencias del espectaculo <?php echo $nameS[$i] ?></label>
						<input type="number" name="assistanceS<?php echo $i ?>">
						<br>
						<label>Ingrese el total de gastos del espectaculo <?php echo $nameS[$i] ?></label>
						<input type="number" name="expensesS<?php echo $i ?>">
						<br>
					<?php
				}
			?>
				<input type="hidden" name="quantityD" value="<?php echo $quantityD ?>">
				<input type="hidden" name="ticketsM" value="<?php echo $ticketsM ?>">
				<?php
				for ($i=0; $i < $quantityD; $i++) { 
					?>
					<input type="hidden" name="nameS<?php echo $i ?>" value="<?php echo $_POST['nameS'.$i] ?>">
					<?php
				}
				?>
				<li>
					<button type= "submit" class="button"> Calcular </button>
				</li>		
		</form>
	</section>
</body>
</html>