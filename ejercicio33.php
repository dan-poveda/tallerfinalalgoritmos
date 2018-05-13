<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 33 </TITLE>
	</head>
	<BODY>
		<H1> Descuento a los clientes </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el nombre del cliente:</label>
				<input type = "text" name = "nameClie">	
			</li>			
			<li>
				<label> Ingrese el valor de la compra:</label>
				<input type = "text" name = "valuePurchase">	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['valuePurchase']) != "" && isset($_POST['nameClie']) != ""){			
						$valuePurchase = $_POST['valuePurchase'];
						$name = $_POST['nameClie'];
						if ($valuePurchase < 500) {
							$discount = $valuePurchase * 0.0;
							$total = $valuePurchase - $discount;
							echo "El nombre del cliente es:".$name;
							echo "<br>El monto de la compra es de: ".$valuePurchase;
							echo "<br>El total a pagar es: ".$total;
							echo "<br>El descuento recibido es de: ".$discount;
						}
							elseif ($valuePurchase > 500 && $valuePurchase <=1000) {
								$discount = $valuePurchase * 0.05;
								$total = $valuePurchase - $discount;
								echo "El nombre del cliente es:".$name;
								echo "<br>El monto de la compra es de: ".$valuePurchase;
								echo "<br>El total a pagar es: ".$total;
								echo "<br>El descuento recibido es de: ".$discount;
							}	
								elseif ($valuePurchase > 1000 && $valuePurchase <= 7000) {
									$discount = $valuePurchase * 0.11;
									$total = $valuePurchase - $discount;
									echo "El nombre del cliente es:".$name;
									echo "<br>El monto de la compra es de: ".$valuePurchase;
									echo "<br>El total a pagar es: ".$total;
									echo "<br>El descuento recibido es de: ".$discount;
								}	
									elseif ($valuePurchase > 7000 && $valuePurchase <= 15000) {
										$discount = $valuePurchase * 0.18;
										$total = $valuePurchase - $discount;
										echo "El nombre del cliente es:".$name;
										echo "<br>El monto de la compra es de: ".$valuePurchase;
										echo "<br>El total a pagar es: ".$total;
										echo "<br>El descuento recibido es de: ".$discount;
									}
										elseif ($valuePurchase > 15000) {
											$discount = $valuePurchase * 0.25;
											$total = $valuePurchase - $discount;
											echo "El nombre del cliente es:".$name;
										echo "<br>El monto de la compra es de: ".$valuePurchase;
										echo "<br>El total a pagar es: ".$total;
										echo "<br>El descuento recibido es de: ".$discount;
										}
					}
				?>
			</section>
	</BODY>
</html>