<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 69</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 69</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Numeros amigos</h4>
				<label>Introduce primer número:</label><br>
				<input type="text" name="n1"><br>
				<label>Introduce segundo número:</label><br>
				<input type="number" name="n2"><br>
				<button type="submit">Ingresar datos</button> <br>
			</section>
		</form>
		<section>
			<?php
				if (isset($_POST['n1'])) {
				 	$n1 = $_POST['n1'];
				 	$n2 = $_POST['n2'];
				 	$suma = 0;
				 	for($i=1;$i<$n1;$i++){  
             			if($n1%$i==0){
                			$suma=$suma+$i;
             			}
        			}
        			if($suma==$n2){
           				$suma=0;
           				for($i=1;$i<$n2;$i++){  
                			if($n2%$i==0){
                   				$suma=$suma+$i;
               				}
           				}
           				if($suma==$n1){
              				echo "Son numeros amigos";
           				}else{
                   			echo "No son numeros amigos";
           				}
        			}        
        			else{
               			echo "No son numeros amigos";
        			}
				}
			?>
		</section>
	</body>
</html>