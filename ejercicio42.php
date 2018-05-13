<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 42 </TITLE>
	</head>
	<BODY>
		<H1> Analisis clinicos </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese la edad(En Meses):</label>
				<input type = "text" name = "age">	
			</li>
			<li>
				<label> Ingrese (1) si su genero es masculino o (2) Si es femenino:</label>
				<input type = "text" name = "gender">	
			</li>
			<li>
				<label> Ingrese el nivel de su hemoglobina (En %):</label>
				<input type = "text" name = "hemoglobin">	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['age']) != "" && isset($_POST['gender']) != "" && isset($_POST['hemoglobin']) != ""){			
						$age = $_POST['age'];
						$gender = $_POST['gender'];
						$hemoglobin = $_POST['hemoglobin'];
						if ($gender == 1) {
							$gender = 'Masculino';
						}
						elseif ($gender == 2) {
							$gender = 'Femenino';
						}
						if ($age > 12) {
							$age = $age / 12;
							round($age);
							if ($age > 1 && $age <= 5 && $hemoglobin >= 11.5 && $hemoglobin <= 15) {
								echo "El resultado es (NEGATIVO), el paciente NO tiene Anemia";
							}
							elseif ($age > 1 && $age <= 5 && $hemoglobin < 11.5) {
								echo "El Resultado es (POSITIVO), El paciente TIENE Anemia";
							}
							if ($age > 5 && $age <= 10 && $hemoglobin >= 12.6 && $hemoglobin <= 15.5) {
								echo "El resultado es (NEGATIVO), El paciente NO tiene Anemia";
							}
							elseif ($age > 5 && $age <= 10 && $hemoglobin < 12.6) {
								echo "El resultado es (POSITIVO), El paciente TIENE Anemia";
							}
							if ($age > 10 && $age <= 15 && $hemoglobin >= 13 && $hemoglobin <= 15.5) {
								echo "El resultado es (NEGATIVO), El paciente NO tiene Anemia";
							}
							elseif ($age > 10 && $age <= 15 && $hemoglobin < 13) {
								echo "El resultado es (POSITIVO), El paciente TIENE Anemia";
							}
							if ($age > 15  && $gender == 'Masculino' && $hemoglobin >= 14 && $hemoglobin <= 18) {
								echo "El resultado es (NEGATIVO), El paciente NO tiene Anemia";
							}
							elseif ($age > 15  && $gender == 'Masculino' && $hemoglobin < 14) {
								echo "El resultado es (POSITIVO), El paciente TIENE Anemia";
							}
							if ($age > 15  && $gender == 'Femenino' && $hemoglobin >= 12 && $hemoglobin <= 16) {
								echo "El resultado es (NEGATIVO), El paciente NO tiene Anemia";
							}
							elseif ($age > 15  && $gender == 'Femenino' && $hemoglobin < 12) {
								echo "El resultado es (POSITIVO), El paciente TIENE Anemia";
							}
						}
						if ($age <= 12) {
							if($age > 0 && $age <= 1 && $hemoglobin >= 13 && $hemoglobin <= 26) {
								echo "El resultado es (NEGATIVO), El paciente NO tiene Anemia";
							}							
							elseif ($age > 0 && $age <= 1 && $hemoglobin < 13) {
								echo "El resultado es (POSITIVO), El paciente TIENE Anemia";
							}
							if ($age > 1 && $age <= 6 && $hemoglobin >= 10 && $hemoglobin <= 18) {
								echo "El resultado es (NEGATIVO), El paciente NO tiene Anemia";
							}
							elseif ($age > 1 && $age <= 6 && $hemoglobin < 10) {
								echo "El resultado es (POSITIVO), El paciente TIENE Anemia";
							}
							if ($age > 6 && $age <= 12 && $hemoglobin >= 11 && $hemoglobin <= 15) {
								echo "El resultado es (NEGATIVO), El paciente NO tiene Anemia";
							}
							elseif ($age > 6 && $age <= 12 && $hemoglobin < 11) {
								echo "El resultado es (POSITIVO), El paciente TIENE Anemia";
							}
						}
					}
				?>
			</section>
	</BODY>
</html>