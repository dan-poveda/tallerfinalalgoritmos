<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 19 </TITLE>
	</head>
	<BODY>
		<H1> Hospital rural </H1>
		<Form Action= "#" method = "post">
			<li>		
				<label> Ingrese el monto del presupuesto:</label>
				<input type = "text" name = "budget" >	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>			
				<?php
					if (isset($_POST['budget']) != ""){
						$budget = $_POST['budget'];
						$gynecology = $budget * 0.4;
						$traumatology = $budget * 0.3;
						$pediatrics = $budget * 0.3;
						echo "El dinero que recibira el area de ginecología es: ".$gynecology;
						echo "<br>El dinero que recibira el area de traumatología es: ".$traumatology;
						echo "<br>El dinero que recibira el area de pediatria es: ".$pediatrics;
											
					}
 				?>					
			</section>
	</BODY>
</html>