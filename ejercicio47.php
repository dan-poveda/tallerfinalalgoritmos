<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 47 </TITLE>
	</head>
	<BODY>
		<H1> Enteros positivos impares </H1>
			<section>
				<?php
					for ($i=0; $i < 100; $i++) { 
						if ($i % 2 == 1 && $i % 7 == 1) {
							echo "<br>".$i;
						}
					}
				?>
			</section>
	</BODY>
</html>