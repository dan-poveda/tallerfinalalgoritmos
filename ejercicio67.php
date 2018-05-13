<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 67</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 67</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Pago</h4>
			</section>
		</form>
		<section>
			<?php
				$sum = 0;
				$pay = 0;
				$difference = 0;
				for($i = 0; $i < 14; $i ++) {
				if($sum == 0){
					$sum = $sum + 100;
				}
				else{
					$sum = $sum + 125;
				}
				$pay = $pay + $sum;
				$difference = 12775-$pay;
				
			    echo "El monto del pago " . ($i+1) . " es ".$sum . " y lo pendiente por cancelar es: ".$difference . "<br>";
		}
			?>
		</section>
	</body>
</html>