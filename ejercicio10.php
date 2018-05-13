<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 10 </TITLE>
	</head>
	<BODY>
		<H1> cantidad </H1>
		<Form Action= "#" method = "post">			
			<br>
				<label> Ingrese La Cantidad En Chelines Austriacos:</label>
				<input type = "text" name = "chelines" >	
			</br>
			<br>
				<label> Ingrese La Cantidad En Dracmas Griegos:</label>
				<input type = "text" name = "dracmas" >	
			</br>
			<br>
				<label> Ingrese La Cantidad En Pesetas:</label>
				<input type = "text" name = "pesetas" >	
			</br>
			<br>
				<button type= "submit"> Calcular </button>
			</br>
		</Form>
			<section>
				<?php
					if (isset($_POST['chelines']) != "" && isset($_POST['dracmas']) != "" && isset($_POST['pesetas']) != ""){
						$chelines = $_POST['chelines'];	
						$dracmas = $_POST['dracmas'];	
						$pesetas = $_POST['pesetas'];
						$total1= $chelines * 9.56871;
						$total2= $dracmas * 0.88607;
						$total2= $total2 * 0.0497;
						$total3= $pesetas * 0.008;
						$total4= $pesetas * 10.765;
						echo "Los ".$chelines." chelines Austriacos equivalen a: ".$total1." Pesetas";
						echo "<br> Los ".$dracmas." dracmas Griegos equivalen a: ".round($total2,3)." Francos Franceses";
						echo "<br> Las ".$pesetas." Pesetas equivalen a: ".round($total3,3)." Dolares";
						echo "<br> Las ".$pesetas." Pesetas equivalen a: ".round($total4,2)." Liras Italianas";
					}
				?>
			</section>
	</BODY>
</html>