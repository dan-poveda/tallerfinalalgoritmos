<!DOCTYPE html>
<html>
	<head> 
		<title>Ejercicio 86</title>
	</head>
	<body>
		<header>
			<h2>Ejercicio 86</h2>
		</header>
		<form action="Ejercicio86.php" method="post">
			<section>
				<?php
					$numTea = $_POST['numTea'];
					for ($i=0; $i < $numTea; $i++) {
						$nameTea[$i] = $_POST['nameTea'.$i]; 
						$sexTea[$i] = $_POST['sexTea'.$i]; 
						$ageTea[$i] = $_POST['ageTea'.$i]; 
					}

					$less = 0;
					$higher = 0;
					$countl = 0;
					$counth = 0;
					for ($i=0; $i < $numTea; $i++) {
						$sum = array_sum($ageTea);
						$promediumAge = $sum/$numTea;
						if($less == 0 || $less > $ageTea[$i])
						{
							$less = $ageTea[$i];
							$namel = $nameTea[$i];
							if($less == 0 || $less < $promediumAge)
							{
								$countl++;
							}
						}

						if($higher == 0 || $higher < $ageTea[$i])
						{
							$higher = $ageTea[$i];
							$nameh = $nameTea[$i];
							if($higher == 0 || $higher > $promediumAge)
							{
								$counth++;
							}
						}
					}
					echo "<br>La edad promedio de los profesores: ".$promediumAge;
					echo "<br>Nombre del profesor más joven del grupo: ".$namel;
					echo "<br>Nombre del profesor con más edad: ".$nameh;
					echo "<br>Número de profesoras con edad mayor al promedio: ".$countl;
					echo "<br>Número de profesores con edad menor al promedio: ".$counth;
				?>
				<br>
				<button type="submit"> Volver </button>
			</section>
		</form>
	</body>
</html>
