<!DOCTYPE html>
<html>
	<head> 
		<TITLE>EJERCICIO 31 |  TALLER ALGORITMOS</TITLE>
	</head>
	<BODY>
		<H1> EJERCICIO 31 |  TALLER ALGORITMOS </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese La Distancia Que Recorrera (En Km):</label>
				<input type = "text" name = "km">	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['km']) != ""){			
						$km = $_POST['km'];
						$bolivares = 5000;
						if ($km <= 300) {
							echo "El Total A Pagar Es De: ".$bolivares." Bolivares";
						}
							elseif ($km > 300 && $km <1000) {
								$kmExceeded = $km - 300;
								$totalPaymentExceeded = $kmExceeded * 200;
								$totalPayment = $totalPaymentExceeded + $bolivares;
								echo "El Total A Pagar Es De: ".$totalPayment." Bolivares";													
							}	
						if ($km > 1000) {
							$kmExceeded2= $km - 300; 
							$kmExceeded= $km - 1000;
							$totalPaymentExceeded2 = $kmExceeded2 * 200;
							$totalPaymentExceeded = $kmExceeded * 150;
							$totalPayment = $bolivares + $totalPaymentExceeded + $totalPaymentExceeded2;
							echo "El Total A Pagar Es De: ".$totalPayment." Bolivares";
						}	
					}
					
				?>
			</section>
	</BODY>
</html>