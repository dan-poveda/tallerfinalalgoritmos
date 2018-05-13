<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 84</title>
	</head>
	<body>
		<header>
			<h2>Ejercicio 84</h2>
		</header>
		<section>
			<?php
				$numberProvider = $_POST['numberProvider'];
				for ($i=0; $i < $numberProvider; $i++) { 
					$name[$i] = $_POST['name'.$i];
					$city[$i] = $_POST['city'.$i];
					$numberArticle[$i] = $_POST['numberArticle'.$i];
				}

				for ($i=0; $i < $numberProvider; $i++) { 
					$consultname = $name[$i];
					$consultcity = $city[$i];
					$consultnum = $numberArticle[$i];
					echo "<br>Nombre: ".$consultname.", Ciudad: ".$consultcity.", Número articulos: ".$consultnum;
				}
			?>
		</section>
		<section>
			<form action="#" method="post">
			<label>Nombre proveedor</label>
			<input type="text" name="name">
			<label>Ciudad</label>
			<input type="text" name="newcity">
			<label>Número de articulos</label>
			<input type="text" name="newnumberArticle">
			<button type="submit">Enviar</button>
			</form>
		</section>
		<section>
			<?php
			if (isset($_POST['name'])!= ""){
				$namenew = $_POST['name'];
				$newcity = $_POST['newcity'];
				$newnumberArticle = $_POST['newnumberArticle'];
				echo "Datos actualizados";
				echo "<br>Nombre: ".$namenew.", Ciudad: ".$newcity.", Número articulos: ".$newnumberArticle;
			} ?>
		</section>
	</body>
</html>