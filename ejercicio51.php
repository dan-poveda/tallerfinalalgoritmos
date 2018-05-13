<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 51 </TITLE>
	</head>
	<BODY>
		<H1> Termino doceavo </H1>
			<section>			
				<?php
					$a= 0;
					$b= 0;
					$cont =  0;
					for ($i=6; $i <= 61; $i = $i + 5) { 
						$a = $i;
						$b = $cont;
						$cont = $a + $b;
						echo $i."|";						
					}
					$twelfth = $i - 5;
					echo "<br>El termino doceavo es: ".$twelfth;
					echo "<br>La suma de los numeros es: ".$cont;
 				?>					
			</section>
	</BODY>
</html>