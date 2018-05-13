<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 68</title>
	</head>
	<body>
		<header>
			<h1>Ejercicio 68</h1>
		</header>
		<form method="post" action="#">
			<section>
				<h4>Suma</h4>
			</section>
		</form>
		<section>
			<?php
				$suma;
				$count = 0;
        		for($i=1;;$i++){ 
            		$suma=0;
            		for($j=1;$j<$i;$j++){ 
            			if($i%$j==0){
                    		$suma=$suma+$j;    
                		}
            		}
	        		if($i==$suma){          
	        		$count++;
	            	echo $i . "<br>";
	        		}
	        		if($count == 3)
	        		break;
        		}
			?>
		</section>
	</body>
</html>