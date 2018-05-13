<!DOCTYPE html>
<html>
	<head> 
		<title> Ejercicio 18 </title>
	</head>
	<body>
		<H1> Problema gasolineria </H1>
		<Form Action= "#" method = "post">
			<li>		
				<label> Ingrese La Cantidad De Galones Compradas Por El Cliente:</label>
				<input type = "text" name = "quantityGallons" >	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>			
				<?php
					if (isset($_POST['quantityGallons']) != ""){
						$quantityGallons = $_POST['quantityGallons'];
						$total = $quantityGallons * 375.5;
						echo "El total a cobrar al cliente son: ".$total." Bolivares";
											
					}
 				?>					
			</section>
	</BODY>
</html>