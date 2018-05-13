<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 5 </TITLE>
	</head>
	<body>
		<h1> Notas computación</h1>
	 	<form action="#" method="post">


	 <br>
	 	<label> Ingrese la nota 1: </label>
		<input type = "text" name="note1">
	 </br>
	 <br>
	    <label> Ingrese la nota 2: </label>
		<input type = "text" name="note2">
	 </br>
	 <br>
	 	<label> Ingrese la nota 3: </label>
		<input type = "text" name="note3">
	 </br>
	 <br>
	 	<label> Ingrese la nota examen final: </label>
		<input type = "text" name="final">
	 </br>
	 <br>
	 	<label> Ingrese la nota trabajo final: </label>
		<input type = "text" name="trabajo">
	 </br>
	 <br>
		<button type= "sumit">Enviar </button>
	 </br>
		</form>
		<section> 
			<?php
				if (isset($_POST['note1']) !="") {
					if (isset($_POST['note2']) !=""){
					  	if (isset($_POST['note3']) !=""){
					  	 	if (isset($_POST['final']) !=""){
					  			if (isset($_POST['trabajo']) !=""){
					$note1 = $_POST['note1'];
					$note2 = $_POST['note2'];
					$note3 = $_POST['note3'];
					$final = $_POST['final'];
					$trabajo = $_POST['trabajo'];
					$total1 = (($note1 + $note2 + $note3) / 3) * 0.55;
					$final = $final * 0.30;
					$trabajo = $trabajo * 0.15;
					$total = $total1 + $final + $trabajo;

			   	echo "<br>La calificación final es: " .$total;
					  	        }
					  		}	
			            } 
					}    
				}
			?>
		</section>
	</body>
</html>