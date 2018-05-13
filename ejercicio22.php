<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 22 </TITLE>
	</head>
	<BODY>
		<H1> Porcentaje que se cobra </H1>
		<Form Action= "#" method = "post">
			<li>		
				<label> Ingrese el valor del computador: </label>
				<input type = "text" name = "ValueCont" >	
			</li>
			<li>		
				<label> Ingrese el valor de cada cuota:</label>
				<input type = "text" name = "valueShare" >	
			</li>	
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>			
				<?php
					if (isset($_POST['ValueCont']) != "" && isset($_POST['valueShare']) != ""){
						$ValueCont = $_POST['ValueCont'];
						$valueShare = $_POST['valueShare'];
						$totalShare = $valueShare * 12;
						$percentage = ($totalShare - $ValueCont)/100;
						if ($percentage > 100) {
							echo "El recargo por el pago a cuotas es del: 100 %";
						}
						else{
							echo "El recargo por el pago a cuotas es del: ".$percentage." %";
						}
					}
 				?>					
			</section>
	</BODY>
</html>