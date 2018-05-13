<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 17 </TITLE>
	</head>
	<BODY>
		<H1> Porcentage de descuento </H1>
		<Form Action= "#" method = "post">
			<li>		
				<label> Ingrese El Valor Final Pagado Por El Producto:</label>
				<input type = "text" name = "valueFinal" >	
			</li>
			<li>		
				<label> Ingrese El Precio De Venta Al Publico (PVP):</label>
				<input type = "text" name = "valuePVP" >	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>			
				<?php
					if (isset($_POST['valueFinal']) != "" && isset($_POST['valuePVP']) != ""){
						$valueFinal = $_POST['valueFinal'];
						$valuePVP = $_POST['valuePVP'];
						$total = ($valuePVP - $valueFinal) /100;
						if ($total > 100) {
							echo "El porcentaje de descuento es del: 100%";	
						}
						else{
							echo "El porcentaje de descuento es del: ".$total." %";		
						}
						
					}
 				?>					
			</section>
	</BODY>
</html>