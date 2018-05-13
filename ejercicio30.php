<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 30 </TITLE>
	</head>
	<BODY>
		<H1> 4 Digitos </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor de la variable (A):</label>
				<input type = "text" name = "A">	
			</li>			
			<li>
				<label> Ingrese el valor de la variable (B):</label>
				<input type = "text" name = "B">	
			</li>
			<li>
				<label> Ingrese el valor de la variable (C):</label>
				<input type = "text" name = "C">	
			</li>
			<li>
				<label> Ingrese el valor de la variable (D):</label>
				<input type = "text" name = "D">	
			</li>
			<li>
				<button type= "submit"> Enviar </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['A']) != "" && isset($_POST['B']) != "" && isset($_POST['C']) != "" && isset($_POST['D']) != "" ){			
						$A = $_POST['A'];
						$B = $_POST['B'];
						$C = $_POST['C'];
						$D = $_POST['D'];
						echo"El numero es: ".$A.$B.$C.$D;
						if ($B == 9) {							
							$A = $A+1;
							$B = 0;
							$C = 0;
							$D = 0;						
							echo"<br>El numero redondeado es: ".$A.$B.$C.$D;
						}					
						elseif ($C < 6) {	
							$C = 0;
							$D = 0;						
							echo"<br>El numero redondeado es: ".$A.$B.$C.$D;
						}
						elseif ($C > 5 ) {							
							$B = $B+1;
							$C = 0;
							$D = 0;						
							echo"<br>El numero redondeado es: ".$A.$B.$C.$D;
						}
					}
				?>
			</section>
	</BODY>
</html>