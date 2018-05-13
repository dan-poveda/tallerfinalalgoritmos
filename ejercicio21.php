<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 21 </TITLE>
	</head>
	<BODY>
		<H1> Compra a un agricultor </H1>
		<Form Action= "#" method = "post">
			<li>		
				<label> Ingrese el valor de las naranjas del lote:</label>
				<input type = "text" name = "oranges" >	
			</li>
			<li>		
				<label> Ingrese el valor de la docena:</label>
				<input type = "text" name = "valueDocena" >	
			</li>		
			<li>		
				<label> Ingrese el valor total de la venta:</label>
				<input type = "text" name = "total" >	
			</li>
			<li>
				<button type= "submit"> Enviar </button>
			</li>
		</Form>
			<section>			
				<?php
					if (isset($_POST['oranges']) != "" && isset($_POST['valueDocena']) != "" && isset($_POST['total']) != ""){
						$oranges = $_POST['oranges'];
						$valueDocena = $_POST['valueDocena'];
						$total = $_POST['total'];
						$percentage = 75/100/48000;
						echo "El Porcetaje de ganancia obtenida es: ".$percentage;
					}
 				?>					
			</section>
	</BODY>
</html>