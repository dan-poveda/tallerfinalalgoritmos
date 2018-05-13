<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 64</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 64</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Numeros aproximados</h4>
				<br>
			</section>
		</form>
		<section>
			<?php
				$a = 1;
				$b = 1;
				$c = 0;
				for ($x=0; $a < 1.99 ; $x++) {

					$b = $b / 2;
					$a = $b + $a; 
					$c = $c + 1;
					
				}
				echo "El ultimo valor obtenido fue: " . $a . "<br>";
				echo "el numero de terminos fueron: " . $c . "<br>";
			?>
		</section>
	</body>
</html>