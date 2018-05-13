<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 44 </TITLE>
	</head>
	<BODY>
		<H1> Verificar dinero </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor de su casa:</label>
				<input type = "text" name = "valueHouse">	
			</li>
			<li>
				<label> Ingrese el total que se invertira:</label>
				<input type = "text" name = "valueNegocy">	
			</li>
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['valueHouse']) != "" && isset($_POST['valueNegocy']) != ""){			
						$valueHouse = $_POST['valueHouse'];
						$valueNegocy = $_POST['valueNegocy'];
						//Datos Ficticios De Hipoteca (Se Desconoce El % Porcentaje) Simularemos Que Es De Un 30% Del Valor De La Inmueble
						$mortgage = $valueHouse * 0.2;
						echo "El monto que el banco le prestara es de: ".$mortgage;
						if ($mortgage < 1000000) {
							$investment = $valueNegocy * 0.5;
							echo "<br>El monto que usted invertira es de: ".$investment;
							echo " y el monto que invertira su socio es de: ".$investment;
						}
						elseif ($mortgage >= 1000000) {
							$valueInvestment = $valueNegocy - $mortgage;
							$valueInvestment = $valueInvestment * 0.5;
							$investment1 = $valueInvestment + $mortgage;
							echo "<br>El monto total que usted invertira adicionando al Monto es de: ".$investment1;
							echo " y El monto que invertira su socio es de: ".$valueInvestment;
						}	
					}	
				?>
			</section>
	</BODY>
</html>