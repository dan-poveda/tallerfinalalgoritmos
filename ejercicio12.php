<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 12 </TITLE>
	</head> 
	<BODY>
		<H1> Promedio Notas </H1>
		<Form Action= "#" method = "post">
		<br>			
		<label> MATEMATICAS</label>
		</br>
			<br>		
				<label> Ingrese la nota del examen:</label>
				<input type = "text" name = "examMath" >	
			</br>
			<br>
				<label> Ingrese nota de la tarea 1:</label>
				<input type = "text" name = "homeworkMath1" >	
			</br>
			<br>
				<label> Ingrese nota de la tarea 2:</label>
				<input type = "text" name = "homeworkMath2" >	
			</br>
			<br>
				<label> Ingrese nota de la tarea 3:</label>
				<input type = "text" name = "homeworkMath3" >	
			</br>
			<br>
			<label> FISICA </label>
			</br>
			<br>				
				<label> Ingrese la nota del examen:</label>
				<input type = "text" name = "examPhy" >	
			</br>
			<br>
				<label> Ingrese nota de la tarea 1:</label>
				<input type = "text" name = "homeworkPhy1" >	
			</br>
			<br>
				<label> Ingrese nota de la tarea 2:</label>
				<input type = "text" name = "homeworkPhy2" >	
			</br>
			<br>
			<label> QUIMICA </label>
			</br>
			<br>
				<label> Ingrese la nota del examen:</label>
				<input type = "text" name = "examChem" >	
			</br>
			<br>
				<label> Ingrese nota de la tarea 1:</label>
				<input type = "text" name = "homeworkChem1" >	
			</br>
			<br>
				<label> Ingrese nota de la tarea 2:</label>
				<input type = "text" name = "homeworkChem2" >	
			</br>
			<br>
				<label> Ingrese nota de la tarea 3::</label>
				<input type = "text" name = "homeworkChem3" >	
			</br>
			<br>
				<button type= "submit"> Calcular </button>
			</br>
		</Form>
			<section>
				<?php
					if (isset($_POST['examMath']) != "" && isset($_POST['homeworkMath1']) != "" && isset($_POST['homeworkMath2']) != "" && isset($_POST['homeworkMath3']) != "" && isset($_POST['examPhy']) != "" && isset($_POST['homeworkPhy1']) != "" && isset($_POST['homeworkPhy2']) != "" && isset($_POST['examChem']) != "" && isset($_POST['homeworkChem1']) != "" && isset($_POST['homeworkChem2']) != "" && isset($_POST['homeworkChem3']) != ""){
						$examMath = $_POST['examMath'];	
						$examPhy = $_POST['examPhy'];	
						$examChem = $_POST['examChem'];	
						$homeworkMath1 = $_POST['homeworkMath1'];	
						$homeworkMath2 = $_POST['homeworkMath2'];	
						$homeworkMath3 = $_POST['homeworkMath3'];	
						$homeworkPhy1 = $_POST['homeworkPhy1'];	
						$homeworkPhy2 = $_POST['homeworkPhy2'];	
						$homeworkChem1 = $_POST['homeworkChem1'];	
						$homeworkChem2 = $_POST['homeworkChem2'];	
						$homeworkChem3 = $_POST['homeworkChem3'];	

						//Matematicas
						$examMath = $examMath * 0.9;
						$averageMath = (($homeworkMath1 + $homeworkMath2 + $homeworkMath3) /3) *0.1;					
						$noteFinalMath = $examMath + $averageMath;

						//Fisica
						$examPhy = $examPhy * 0.8;
						$averagePhy = (($homeworkPhy1 + $homeworkPhy2) /2) *0.2;					
						$noteFinalPhy = $examPhy + $averagePhy;

						//Quimica
						$examChem = $examChem * 0.85;
						$averageChem = (($homeworkChem1 + $homeworkChem2 + $homeworkChem3) /3) *0.15;					
						$noteFinalChem = $examChem + $averageChem;

						//Promdio Total
						$averageTotal = ($noteFinalMath + $noteFinalPhy + $noteFinalChem) / 3;
						echo "la nota final de matematicas es: ".$noteFinalMath;
						echo "<br>la nota final de Fisica es: ".$noteFinalPhy;
						echo "<br>la nota final de Quimica es:: ".$noteFinalChem;
						echo "<br>El promedio es: ".$averageTotal;
					}
				?>
			</section>
	</BODY>
</html>