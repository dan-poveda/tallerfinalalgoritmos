<!DOCTYPE html>
<html>
	<head> 
		<title>Ejercicio 86</title>
	</head>
	<body>
		<header>
			<h2>Ejercicio 86</h2>
		</header>
		<section>
			<form action="#" method="post">
				<label>Numero de profesores</label>
				<input type="number" name="numTea">
				<button type="submit">Generar</button>
			</form>
		</section>
		<setion>
			<form action="Ejercicio86_1.php" method="post">
			<?php if (isset($_POST['numTea'])!= "") {
				$numTea = $_POST['numTea'];
				for ($i=0; $i < $numTea; $i++) { ?>
				<label>Nombre profesor <?php echo ($i+1) ?></label>
				<input type="text" name="nameTea<?php echo $i ?>">
				<label>Genero profesor <?php echo ($i+1) ?></label>
				<input type="text" name="sexTea<?php echo $i ?>">
				<label>Edad profesor <?php echo ($i+1) ?></label>
				<input type="number" name="ageTea<?php echo $i ?>">
			 <?php } ?>
			 	<input type="hidden" name="numTea" value="<?php echo $numTea ?>">
				<button type="submit">Enviar</button>
			<?php } ?>
			</form>
		</setion>
	</body>
</html>