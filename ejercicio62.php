<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 62</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 62</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Empresas</h4>
				<label>Digite la cantidad de empresas que desea ingresar</label><br>
				<input type="number" name="EP"><br>
				<button type="submit">Ingresar datos</button> <br>
			</section>
		</form>
		<section>
			<form method="post" action="Ejercicio62p.php">
			<?php
				if (isset($_POST['EP'])) {
				 	$EP = $_POST['EP'];
				 	for ($i=0; $i < $EP ; $i++) { 
					?>
				 		<label>Empresa No. <?php echo $i + 1?> </label><br>
				 		<label>Digite la actividad 1. Agricola 2. Industrial 3. minera 4. pesquera</label>
				 		<input type="text" name="AC<?php echo $i ?>" max= 4> <br>
				 		<label>Digite el numero de la localizacion 1. norte, 2. sur, 3. este, 4. oeste </label>
				 		<input type="text" name="LO<?php echo $i ?>" max= 4><br>
				 		<label>Digite el numero del numero de los trabajadores </label>
				 		<input type="text" name="NT<?php echo $i ?>"><br>
				<?php 
				}
				?>
				<input type="hidden" name="EP2" value="<?php echo $EP ?>">
				<button type="submit">Almacenar</button>
				<?php
			}
			?>
			</form>
		</section>
	</body>
</html>