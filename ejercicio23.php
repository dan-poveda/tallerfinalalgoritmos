<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 23 </TITLE>
	</head>
	<BODY>
		<H1> Tonela de maíz </H1>
		<Form Action= "#" method = "post">
			<li>		
				<label> Ingrese la cantidad de Kilogramos de harina:</label>
				<input type = "text" name = "kg" >	
			</li>
			<li>		
				<label> Ingrese la cantidad de litros de aceite:</label>
				<input type = "text" name = "l" >	
			</li>	
			<li>		
				<label> Ingrese valor  de 24 Kg de harina:</label>
				<input type = "text" name = "B1" >	
			</li>
			<li>		
				<label> Ingrese valor de 15 envases de aceite:</label>
				<input type = "text" name = "B2" >	
			</li>
			<li>		
				<label> Ingrese el valor al detal del Kg de harina:</label>
				<input type = "text" name = "B3" >	
			</li>		
			<li>		
				<label> Ingrese el valor al detal del envase de aceite:</label>
				<input type = "text" name = "B4" >	
			</li>
			<li>
				<button type= "submit"> Enviar </button>
			</li>
		</Form>
			<section>			
				<?php
					if (isset($_POST['kg']) != "" && isset($_POST['l']) != "" && isset($_POST['B1']) != "" && isset($_POST['B2']) != "" && isset($_POST['B3']) != "" && isset($_POST['B4']) != ""){
						$kg = $_POST['kg'];
						$l = $_POST['l'];
						$B1= $_POST['B1'];
						$B2= $_POST['B2'];
						$B3= $_POST['B3'];
						$B4= $_POST['B4'];

						$packages = $kg / 24;
						$packaging = $l / 15;
						$totalPackages = $B1 * $packages;
						$totalPackagin = $B2 * $packaging;
						$totalKg = $B3 * $kg;
						$totalL = $B4 * $l;
						$totalKgL= $totalKg + $totalL;
						$totaSale = $totalPackages + $totalPackagin + $totalKg + $totalL;
						$totaSale = $totaSale - $totalKgL;
						echo "El total fue: ".$totaSale;
					}
 				?>					
			</section>
	</BODY>
</html>