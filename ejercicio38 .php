<!DOCTYPE html>
	<html>
		<head> 
			<TITLE> Ejercicio 38 </TITLE>
		</head>
		<BODY>
			<H1> Datos de una persona </H1>
			<Form Action= "#" method = "post">
			<label>Inserte su edad</label>			
				<li>
					<label> Ingrese el dia de nacimiento:</label>
					<input type = "text" name = "day">
					<span> Ejemplo: 28</span>	
				</li>			
				<li>
					<label> Ingrese el mes de nacimiento:</label>
					<input type = "text" name = "month">	
					<span> Ejemplo: 1</span>
				</li>
				<li>
					<label> Ingrese el año de nacimiento:</label>
					<input type = "text" name = "year">	
					<span> Ejemplo: 2000</span>
				</li>
				<li>
					<button type= "submit"> Calcular </button>
				</li>
			</Form>
				<section>
					<?php
						if (isset($_POST['day']) != "" && isset($_POST['month']) != "" && isset($_POST['year']) != ""){			
							$day = $_POST['day'];
							$month = $_POST['month'];
							$year = $_POST['year'];
							$age1 = 4 - $month;
							$age = 2018 - $year;
							if ($age1 <= 12 && $month > 4) {
								$age = $age - 1;
								echo "La edad es: ".$age;
							}
							else{
								echo "La edad es: ".$age;	
							}
							if ($month == 11 || $month == 12 && $day = 22 ) {
								echo "<br>El signo zodiacal es: SAGITARIO";
							}
							elseif ($month == 12 || $month == 1 && $day = 22) {
								echo "<br>El signo zodiacal es: CAPRICORNIO";
							}
							elseif ($month == 1 || $month == 2 && $day = 21) {
								echo "<br>El signo zodiacal es: ACUARIO";
							}
							elseif ($month == 2 || $month == 3 && $day = 20) {
								echo "<br>El signo zodiacal es: PISCIS";
							}
							elseif ($month == 3 || $month == 4 && $day = 21) {
								echo "<br>El signo zodiacal es: ARIES";
							}
							elseif ($month == 4 || $month == 5 && $day = 21) {
								echo "<br>El signo zodiacal es: TAURO";
							}
							elseif ($month == 5 || $month == 6 && $day = 22) {
								echo "<br>El signo zodiacal es: GENESIS";
							}
							elseif ($month == 6 || $month == 7 && $day = 22) {
								echo "<br>El signo zodiacal es: CANCER";
							}
							elseif ($month == 7 || $month == 8 && $day = 23) {
								echo "<br>El signo zodiacal es: LEO";
							}
							elseif ($month == 8 || $month == 9 && $day = 24) {
								echo "<br>El signo zodiacal es: VIRGO";
							}
							elseif ($month == 9 || $month == 10 && $day = 23){
								echo "<br>El signo zodiacal es: LIBRA";
							}
							elseif ($month == 10 || $month == 11 && $day = 23) {
								echo "<br>El signo zodiacal es: ESCORPIÓN";
							}
						}
					?>
				</section>
		</BODY>
	</html>