<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 14 </TITLE>
	</head>
		
	<BODY>
		<H1> Sitema de ecuaciones </H1>
		<Form Action= "#" method = "post">			
			<br>
				<label> Ingrese valor de (a):</label>
				<input type = "text" name = "a" >	
			</br>
			<br>	
				<label> Ingrese valor de (b):</label>
				<input type = "text" name = "b" >	
			</br>
			<br>		
				<label> Ingrese valor de (c):</label>
				<input type = "text" name = "c" >	
			</br>
			<br>		
				<label> Ingrese valor de (d):</label>
				<input type = "text" name = "d" >	
			</br>
			<br>		
				<label> Ingrese valor de (e):</label>
				<input type = "text" name = "e" >	
			</br>
			<br>		
				<label> Ingrese valor de (f):</label>
				<input type = "text" name = "f" >	
			</br>
			<br>
				<button type= "submit"> Calcular </button>
			</br>
		</Form>
			<section>
				<?php
					if (isset($_POST['a']) != "" && isset($_POST['b']) != "" && isset($_POST['c']) != "" && isset($_POST['d']) != "" && isset($_POST['e']) != "" && isset($_POST['f']) != ""){
						$a = $_POST['a'];	
						$b = $_POST['b'];	
						$c = $_POST['c'];	
						$d = $_POST['d'];	
						$e = $_POST['e'];	
						$f = $_POST['f'];	

						//X
						$topLeftx = $c * $e;
						$topRightx = $b * $f;
						$topx = $topLeftx- $topRightx;

						$bottomLeftx = $a * $e;
						$bottomRightx = $b * $d;
						$bottomx = $bottomLeftx - $bottomRightx;

						$x = $topx / $bottomx;

						//Y
						$topLefty = $a * $f;
						$topRighty = $c * $d;
						$topy = $topLefty - $topRighty;

						$bottomLefty = $a * $e;
						$bottomRighty = $b * $d;
						$bottomy = $bottomLefty - $bottomRighty;

						$y = $topy / $bottomy;						

						echo "El valor de (X) es: ".round($x);
						echo "<br>El valor de (Y) es: ".round($y);

						//Ecuacion 1
						$ecu1Left = $a * $x; 
						$ecu1Right = $b * $y;
						$ecu1 = $ecu1Left + $ecu1Right;
						echo("<br>Ecuacion 1: aX + bY = ".$ecu1);

						//Ecuacion 2
						$ecu2Left = $d * $x; 
						$ecu2Right = $e * $y;
						$ecu2 = $ecu2Left + $ecu2Right;
						echo("<br>Ecuacion 2: dX + eY = ".$ecu2);
					}
				?>
			</section>
	</BODY>
</html>