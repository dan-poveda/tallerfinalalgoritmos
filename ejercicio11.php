<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 11 </TITLE>
	</head> 
	<BODY>
		<H1> trabajo </H1>
		<Form Action= "#" method = "post">			
			<br>
				<label> Ingrese su nombre:</label>
				<input type = "text" name = "name" >	
			</br>
			<br>
				<label> Ingrese numeros de horas tabajadas:</label>
				<input type = "text" name = "hours" >	
			</br>
			<br>
				<label> Ingrese horas extra:</label>
				<input type = "text" name = "hoursExtra" >	
			</br>
			<br>
				<label> Ingrese valor de la hora trabajadas (En Bolivares):</label>
				<input type = "text" name = "valueHour" >	
			</br>
			<br>
				<label> Ingrese numero de hijos:</label>
				<input type = "text" name = "childrens" >	
			</br>
			<br>
				<button type= "submit"> Enviar </button>
			</br>
		</Form>
			<section>
				<?php
					if (isset($_POST['name']) != "" && isset($_POST['hours']) != "" && isset($_POST['hoursExtra']) != "" && isset($_POST['valueHour']) != "" && isset($_POST['childrens']) != ""){
						$name = $_POST['name'];	
						$hours = $_POST['hours'];	
						$hoursExtra = $_POST['hoursExtra'];	
						$valueHour = $_POST['valueHour'];
						$childrens = $_POST['childrens'];
						$valueHourExtra =$valueHour * 0.25;
						$valueHourExtra = $valueHourExtra + $valueHour;
						$totalHoursExtra = $valueHourExtra * $hoursExtra;
						$totalHours = $valueHour * $hours;
						$baseSalary = $totalHours + $totalHoursExtra;
						//deducciones
						$forcedUnemployment = $baseSalary * 0.05;
						$totalSalary = $baseSalary - $forcedUnemployment;
						$policy = $baseSalary * 0.02;
						$totalSalary= $totalSalary - $policy;
						$saving = $baseSalary * 0.07;
						$totalSalary = $totalSalary - $saving;
						//asignaciones
						$academic = 25000;
						$valueChildrens = $childrens * 17300;
						$home = 18000; 
						$totalSalary = $totalSalary + $academic + $valueChildrens + $home; 

						echo "Asignaciones: "."<br>Actualización Academica: ".$academic." Bolivares";
						echo "<br>Asignacion Por Hijos: ".$valueChildrens." Bolivares";
						echo "<br>Prima Por Hogar: ".$home." Bolivares";
						echo "<br>Deducciones: "."<br>Paro Forzoso: ".$forcedUnemployment." Bolivares";
						echo "<br>Politica Habitacional: ".$policy." Bolivares";
						echo "<br>Caja De Ahorro: ".$saving." Bolivares";
						echo "<br>Señor(a) ".$name." Su Sueldo Neto Es: ".$totalSalary." Bolivares";
					}
				?>
			</section>
	</BODY>
</html>