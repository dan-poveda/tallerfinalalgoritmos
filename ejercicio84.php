<html>
	<head>
		<title>Ejercicio 84</title>
	</head>
	<body>
		<header>
			<h2>Ejercicio 84</h2>
		</header>
	<section>
		<form action="#" method="post" >
			<label>Número de proveedores</label>
			<input type="text" name="numberProvider">
			<button type="submit">Generar</button>
		</form>
	</section>
	<section>
			<form action="Ejercicio84_1.php" method="post">
				<?php 
				if (isset($_POST['numberProvider'])!= "") {
				$numberProvider = $_POST['numberProvider'];
				for ($i=0; $i < $numberProvider; $i++) { ?>
					<label>Nombre proveedor <?php echo ($i+1) ?></label>
					<input type="text" name="name<?php echo $i ?>">
					<label>Ciudad <?php echo ($i+1) ?></label>
					<input type="text" name="city<?php echo $i ?>">
					<label>Número de articulos <?php echo ($i+1) ?></label>
					<input type="text" name="numberArticle<?php echo $i ?>">
				<?php } ?>
				<input type="hidden" name="numberProvider" value="<?php echo $numberProvider ?>">
				<button type="submit">Enviar</button>
				<?php } ?>
			</form>
	</section>
</body>
</html>