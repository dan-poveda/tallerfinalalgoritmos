<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 66</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 66</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Aerolinea</h4>
				<label>Digite el numero de vuelo</label><br>
				<input type="number" name="NV"><br>
				<label>Digite cuantas personas estan en el vuelo</label><br>
				<input type="number" name="NP"><br>
				<button type="submit">Ingresar datos</button> <br>
			</section>
		</form>
		<section>
			<form action="Ejercicio66p.php" method="post">
				<?php
				if (isset($_POST['NP'])!="") {
					$NP = $_POST['NP'];
					$NV = $_POST['NV'];
					for ($i=0; $i < $NP ; $i++) { 
					?>
					<label>Nombre pasajero <?php echo $i + 1 ?></label>
					<input type="text" name="Nom<?php echo $i ?>">
					<label>Peso de maleta <?php echo $i + 1 ?></label>
					<input type="text" name="Pes<?php echo $i ?>">
					<br>
				<?php 
				}
				?>
				<input type="hidden" name="NP2" value="<?php echo $NP ?>">
				<input type="hidden" name="NV2" value="<?php echo $NV ?>">
				<button type="submit">Almacenar</button>
				<?php
			}
			?>
		</form>
		</section>
	</body>
</html>