<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 50 </TITLE>
	</head>
	<BODY>
		<H1> Suma de números </H1>
			<section>			
				<?php
					$a= 0;
					$b= 97;
					$cont =  0;
					echo "Los numeros pares entre 97 y 1003 son: ";
					for ($i=97; $i <= 1003; $i++) { 
						if ($i % 2 == 0) {
							echo $i."|";						
							$a = $i;
							$b = $cont;
							$x = $a + $b;
							$cont = $a + $b;
						}						
					}
					echo "<br>La suma se los numeros pares es: ".$cont;
 				?>					
			</section>
	</BODY>
</html>