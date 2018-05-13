<!DOCTYPE html>
<html>
	<head> 
		<title>Ejercicio 82</title>
	</head>
	<body>
		<header>
			<h2>Ejercicio 82</h2>
		</header>
		<form action="Ejercicio82.php" method="post">
			<section>
				<?php
						$students = $_POST['students'];
						$notes = $_POST['notes'];
						$sum = 0;
						$countminS = 0;
						$countmaxS = 0;
						for ($i=0; $i < $students; $i++) { 
							$name[$i] = $_POST['name'.$i];
							$student = $name[$i];
							for ($j=0; $j < $notes; $j++) {
								$note[$j] = $_POST['note'.$j];
							}
						}
						
						for ($i=0; $i < $students; $i++) { 
							for ($j=0; $j < $notes; $j++) {
								$promedium = $note[$j]/$notes;
								$sum = $sum + $promedium;
								
							}
							$promediumClass = $sum / $students;
							if($promedium < $promediumClass)
							{
								$promedium = $promediumClass;
								$countminS++;
							}
							if($promedium > $promediumClass)
							{
								$promedium = $promediumClass;
								$countmaxS++;
							}
						}
							echo"<br>Número ".$i;
							echo"<br>Nombre ".$student;
							echo"<br>El promedio del estudiante es ".$promedium;
							echo"<br>El promedio de la clase es ".$promediumClass;
							echo"<br>Alumnos con definitiva menor al promedio ".$countminS;
							echo"<br>Alumnos con definitiva mayor al promedio ".$countmaxS;
					?>
				<br>
				<button class="submit" type="submit"> Volver </button>
			</section>
		</form>
	</body>
</html>
