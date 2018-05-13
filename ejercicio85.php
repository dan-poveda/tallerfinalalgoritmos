<!DOCTYPE html>
<html>
	<title>Ejercicio 85</title>
	
</head>
<BODY>
	<section>		
		<h1>Ejercicio 85</h1>
		<form action="#" method="post">
			<li>
				<label>Ingrese el numero de apartamentos a registrar:</label>
				<input type="number" name="quantifiA">
			</li>
			<li>
				<button type="submit" class="button"> Generar </button>
			</li>
		</form>
	</section>
	<section>
		<form action="Ejercicio85_1.php" method="post">
			<?php
				if (isset($_POST['quantityA'])!= "") {
					$quantityA = $_POST['quantityA'];
					for ($i=0; $i < $quantityA; $i++) { 
						?>
							<label>Ingrese la superficie del departamento (En M2) <?php echo ($i+1) ?></label>	
							<input type="text" name="surfaceD<?php echo $i ?>">
							<br>
							<label>Ingrese el precio del alquiler del departamento<?php echo ($i+1) ?></label>	
							<input type="text" name="priceD<?php echo $i ?>">
							<br>
						<?php
					}
					?>
						<input type="hidden" name="quantityA" value="<?php echo $quantityD ?>">
						<li>
							<button type= "submit" class="button"> Calcular </button>
						</li>	
						<li>
							<br><a href="../Index.php" class ="button-volver">Volver</a></br>
						</li>	
					<?php
				}
			?>
		</form>
	</section>
</body>
</html>