<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 1</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 1</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Por favor dijite la edad de 3 personas</h4>
				<label>Persona 1</label><br>
				<input type="number" name="age1"><br>
				<label>Persona 2</label><br>
				<input type="number" name="age2"><br>
				<label>Persona 3</label><br>
				<input type="number" name="age3"><br>
				<button type="submit">Ingresar datos</button> <br>
			</section>
		</form>
		<section>
			<?php
				if (isset($_POST['age1'])) {
				 	$age1 = $_POST['age1'];
				 	$age2 = $_POST['age2'];
				 	$age3 = $_POST['age3'];
				 	$avarage = ($age1 + $age2 + $age3)/3;
				 	echo "El promedio de las edades ingresadas es: " . $avarage;
				 } 
			?>
		</section>
	</body>
</html>