<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 83</title>
</head>
<body>
	<section>		
		<h1>Centros turisticos</h1>
		<form action="#" method="post">
			<label>Ingrese cantidad de centros turisticos</label>
			<input type="number" name="sizeCt">
			<button type="submit">Enviar</button>		
		</form>
	</section>
	<section>
		<form action="Ejercicio83_1.php" method="post">			
			<?php
				if (isset($_POST['sizeCt'])!= "") {
					$sizeCt = $_POST['sizeCt'];
					for ($i=0; $i < $sizeCt; $i++) { 
						?>
							<label>Ingrese el nombre del centro turistico<?php echo $i ?></label>	
							<input type="text" name="nameCt<?php echo $i ?>">
							<br>
							<label>Ingrese la cantidad  de la habitación sencilla</label>
							<input type="number" name="HabSen<?php echo $i ?>">
							<br>
							<label>Ingrese la cantidad de habitaciones doble</label>
							<input type="number" name="HabDoble<?php echo $i ?>">
							<br>
							<label>Ingrese la cantidad de restaurantes</label>
							<input type="number" name="Rest<?php echo $i ?>">
							<br>
						<?php
					}
					?>
						<input type="hidden" name="sizeCt" value="<?php echo $sizeCt ?>">
						<button type="submit">Calcular</button>
					<?php
				}
			?>
		</form>
	</section>
</body>
</html>