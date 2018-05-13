<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 65</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 65</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Empleados compañia</h4>
				<label>Ingrese su nombre</label><br>
				<input type="text" name="NAME"><br>
				<label>Ingrese su cedula</label><br>
				<input type="number" name="CED"><br>
				<label>Ingrese el tipo de trabajador que es</label><br>
				<select name="CAR">
					<option value="Obre">Obrero</option>
					<option value="Admin">Administrativo</option>
					<option value="Eje">Ejecutivo</option>
				</select><br>
				<label>Ingrese la cantidad de hijos que tiene</label><br>
				<input type="number" name="HIJ"><br>
				<label>Porcentaje de asistencia</label><br>
				<input type="number" name="DAY"><br>
				<button type="submit">Ingresar datos</button><br>
			</section>
		</form>
		<section>
			<?php
				if (isset($_POST['NAME'])) {
				 	$NAME = $_POST['NAME'];
				 	$CAR = $_POST['CAR'];
				 	$CED = $_POST['CED'];
				 	$HIJ = $_POST['HIJ'];
				 	$DAY = $_POST['DAY'];
				 	switch ($CAR) {
        				case 'Admin':
            				$SUE = 165500;
            				if ($HIJ > 5) {
            					$APOHIJ = ($SUE * 10 / 100) * 5;
            				}
            				else{
            					$APOHIJ = ($SUE * 10 / 100) * $HIJ;
            				}
                			if ($DAY >= 95){
            					$APOASI = ($SUE * 5 / 100);
            				}
            				$DEDCDA = $SUE * 10 / 100;
            				$DEDSS = $SUE * 2 / 100;
            				$SUELNETO = $SUE + $APOHIJ + $APOASI - $DEDSS - $DEDCDA;
            				echo "El señor: " . $NAME . " con cedula: ". $CED . ", tiene un sueldo base de 165500$ con una deduccion a la caja de ahorros de " . $DEDCDA . "$ y una deduccion por seguro social de " . $DEDSS . "$, Su sueldo neto es de " . $SUELNETO. "$ (Al sueldo neto se le añadio el incremento por hijos y asistencia si tuvo)";
          				break;
       					case 'Eje':
            				$SUE = 250000;
            				if ($HIJ > 5) {
            					$APOHIJ = ($SUE * 10 / 100) * 5;
            				}
            				else{
            					$APOHIJ = ($SUE * 10 / 100) * $HIJ;
            				}
                			if ($DAY >= 95){
            					$APOASI = ($SUE * 5 / 100);
            				}
            				$DEDCDA = $SUE * 10 / 100;
            				$DEDSS = $SUE * 2 / 100;
            				$SUELNETO = $SUE + $APOHIJ + $APOASI - $DEDSS - $DEDCDA;
            				echo "El señor: " . $NAME . " con cedula: ". $CED . ", tiene un sueldo base de 250000$ con una deduccion a la caja de ahorros de " . $DEDCDA . "$ y una deduccion por seguro social de " . $DEDSS . "$, Su sueldo neto es de " . $SUELNETO. "$ (Al sueldo neto se le añadio el incremento por hijos y asistencia si tuvo)";
            			break;
            			case 'Obre':
            				$SUE = 100000;
            				if ($HIJ > 5) {
            					$APOHIJ = ($SUE * 10 / 100) * 5;
            				}
            				else{
            					$APOHIJ = ($SUE * 10 / 100) * $HIJ;
            				}
                			if ($DAY >= 95){
            					$APOASI = ($SUE * 5 / 100);
            				}
            				$DEDCDA = $SUE * 10 / 100;
            				$DEDSS = $SUE * 2 / 100;
            				$SUELNETO = $SUE + $APOHIJ + $APOASI - $DEDSS - $DEDCDA;
            				echo "El señor: " . $NAME . " con cedula: ". $CED . ", tiene un sueldo base de 100000$ con una deduccion a la caja de ahorros de " . $DEDCDA . "$ y una deduccion por seguro social de " . $DEDSS . "$, Su sueldo neto es de " . $SUELNETO. "$ (Al sueldo neto se le añadio el incremento por hijos y asistencia si tuvo)";
            			break;

    				}

				 } 
			?>
		</section>
	</body>
</html>