<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 16 </TITLE>
	</head>
	<BODY>
		<H1> Cuantas piezas se fabrican </H1>
			<section>
				<?php
					$sheet= 4;
					$piece= 0.5;
					$potency = $sheet * $sheet;
					$totalPieces = 0.5 * $potency;
					$sobrante=explode(".",$totalPieces);
					if ($sobrante[1] > 0 && $sobrante[1] < 999) {
						echo "<br>El sobrante es de: 0.".$sobrante[1];
					}
					else{
						echo "El total de piezas que saldrian son de: ".$totalPieces;
						echo "<br>El desperdicio sera de: 0";
					}
 				?>					
			</section>
	</BODY>
</html>