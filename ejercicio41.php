<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 41 </TITLE>
	</head>
	<BODY>
		<H1> Gobierno Mexico </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor de hectareas (En m2):</label>
				<input type = "text" name = "hectare">	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['hectare']) != ""){			
						$hectare = $_POST['hectare'];
						if ($hectare > 1000000) {
							$pineTreePercentage = $hectare * 0.7;
							$oyamelTreePercentage = $hectare * 0.2;
							$cedroTreePercentage = $hectare * 0.1;

							//Pinos
							$tenMetersPines = $pineTreePercentage / 10;
							$pines = $tenMetersPines * 8;

							//Oyales
							$fifteenMetersOyales = $oyamelTreePercentage / 15;
							$oyales = $fifteenMetersOyales * 15;

							//Cedros
							$eighteenMetersCedros = $cedroTreePercentage / 18;
							$cedros = $eighteenMetersCedros * 10;  
							echo "El numero de pinos que se sembraran: ".$pines;
							echo "<br>El numero de oyales que se sembraran: ".$oyales;
							echo "<br>El numero De Cedros que se sembraran: ".round($cedros);
						}
						elseif ($hectare <= 1000000){
							$pineTreePercentage = $hectare * 0.5;
							$oyamelTreePercentage = $hectare * 0.3;
							$cedroTreePercentage = $hectare * 0.2;
							
							//Pinos
							$tenMetersPines = $pineTreePercentage / 10;
							$pines = $tenMetersPines * 8;

							//Oyales
							$fifteenMetersOyales = $oyamelTreePercentage / 15;
							$oyales = $fifteenMetersOyales * 15;

							//Cedros
							$eighteenMetersCedros = $cedroTreePercentage / 18;
							$cedros = $eighteenMetersCedros * 10;  
							echo "El numero de pinos que se sembraran: ".$pines;
							echo "<br>El numero de oyales que se sembraran: ".$oyales;
							echo "<br>El numero De Cedros que se sembraran: ".round($cedros);
						}
					}
				?>
			</section>
	</BODY>
</html>