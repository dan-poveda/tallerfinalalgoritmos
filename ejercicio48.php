<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 48 </TITLE>
	</head>
	<BODY>
		<H1> Tabla de conversión </H1>
			<Form Action= "#" method = "post">
			<li>		
				<label> Ingrese el valor (En Farenheit °F):</label>
				<input type = "text" name = "F" >	
			</li>			
			<li>
				<button type= "submit"> Convertir </button>
			</li>
		</Form>
			<section>			
				<?php
					if (isset($_POST['F']) != ""){
						$F = $_POST['F'];
						$C = 5 *($F - 32) / 9;
						$R = $F + 459.67;
						$K = ($F + 459.67) * (5/9);
				?><li><label> Grados Celsius </label></li><?php
						echo "<br>".$F." °F a °C = ".$C." °C";
						if ( $C < 0) {
							echo "<br>En intervalo de 1: <br>";
							for ($i=0; $i >= $C; $i --) { 
								echo $i."|";
							}
							echo "<br>En intervalo de 10: <br>";
							for ($i=0; $i >= $C; $i =$i - 10) { 
								echo $i."|";
							}
							echo "<br>En intervalo de 50: <br>";
							for ($i=0; $i >= $C; $i = $i - 50) { 
								echo $i."|";
							}
						}
						elseif ( $C > 0) {
							echo "<br>En intervalo de 1: <br>";
							for ($i=0; $i <= $C; $i ++) { 
								echo $i."|";
							}
							echo "<br>En intervalo de 10: <br>";
							for ($i=0; $i <= $C; $i =$i + 10) { 
								echo $i."|";
							}
							echo "<br>En intervalo de 50: <br>";
							for ($i=0; $i <= $C; $i = $i + 50) { 
								echo $i."|";
							}
						}
				?><li><label> Grados Rankine </label></li><?php
						echo "<br>".$F." °F a °R = ".$R." °R";
						echo "<br>En intervalo de 1: ";
						for ($i=0; $i <= $R; $i++) { 
							echo $i."|";
						}
						echo "<br>En intervalo de 10: <br>";
						for ($i=0; $i <= $R; $i = $i + 10) { 
							echo $i."|";
						}
						echo "<br>En intervalo de 50: <br>";
						for ($i=0; $i <= $R; $i = $i + 50) { 
							echo $i."|";
						}
				?><li><label> Grados Kelvin </label></li><?php
						echo "<br>".$F." °F a °K = ".$K. " °K";
						echo "<br>En intervalo de 1: ";
						for ($i=0; $i <= $K; $i++) { 
							echo $i."|";
						}
						echo "<br>En intervalo de 10: <br>";
						for ($i=0; $i <= $K; $i = $i + 10) { 
							echo $i."|";
						}
						echo "<br>En intervalo de 50: <br>";
						for ($i=0; $i <= $K; $i = $i + 50) { 
							echo $i."|";
						}
					}				
 				?>					
			</section>
	</BODY>
</html>