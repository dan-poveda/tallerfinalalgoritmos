<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 20 </TITLE>
	</head>
	<BODY>
		<H1> Prestamo de Bolivares </H1>
		<Form Action= "#" method = "post">
			<li>		
				<label> Ingrese el monto del prestamo:</label>
				<input type = "text" name = "capital" >	
			</li>
			<li>		
				<label> Ingrese el monto de los intereses pagados en los 4 años:</label>
				<input type = "text" name = "reason" >	
			</li>
			<li>
				<button type= "submit"> Enviar </button>
			</li>
		</Form>
			<section>			
				<?php
					if (isset($_POST['capital']) != "" && isset($_POST['reason']) != ""){
						$capital = $_POST['capital'];
						$reason = $_POST['reason'];
						$interests = (($capital * $reason)/100);	
						$interestsYears = ($interests * 0.25);
						echo "El porciento anual cobrado por el prestamo es del: ".$interestsYears;
					}
 				?>					
			</section>
	</BODY>
</html>