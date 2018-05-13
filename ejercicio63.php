<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 63</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 63</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Estudiantes</h4>
				<label>Cantidad de estudiantes a encuestar</label><br>
				<input type="number" name="EP"><br>
				<button type="submit">Ingresar datos</button> <br>
			</section>
		</form>
		<section>
			<form method="post" action="Ejercicio63p.php">
			<?php
				if (isset($_POST['EP'])) {
				 	$EP = $_POST['EP'];
					for ($i=0; $i < $EP ; $i++) { 
					?>
				 		<label>Estudiante No. <?php echo $i + 1?> </label><br>
				 		<label>Digite su edad</label>
				 		<input type="text" name="ED<?php echo $i ?>" max= 4> <br>
				 		<label>Digite su sexo 1 = Masculino, 2. Femenino </label>
				 		<input type="text" name="SE<?php echo $i ?>" max= 4><br>
				 		<label>Digite su estado civil 1. soltero 2. casado 3. divorciado </label>
				 		<input type="text" name="ES<?php echo $i ?>"><br>
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