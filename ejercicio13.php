<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 13 </TITLE>
	</head>
	<BODY>
		<H1> Dinero en el banco </H1>
		<Form Action= "#" method = "post">			
			<br>		
				<label> Ingrese cantidad de billetes de 50000:</label>
				<input type = "text" name = "N1" >	
			</br>
			<br>		
				<label> Ingrese cantidad de billetes de 20000:</label>
				<input type = "text" name = "N2" >	
			</br>
			<br>		
				<label> Ingrese cantidad de billetes de  10000:</label>
				<input type = "text" name = "N3" >	
			</br>
			<br>		
				<label> Ingrese cantidad de billetes de 5000:</label>
				<input type = "text" name = "N4" >	
			</br>
			<br>		
				<label> Ingrese cantidad de billetes de 2000:</label>
				<input type = "text" name = "N5" >	
			</br>
			<br>		
				<label> Ingrese cantidad de billetes de 1000:</label>
				<input type = "text" name = "N6" >	
			</br>
			<br>		
				<label> Ingrese cantidad de billetes de 500:</label>
				<input type = "text" name = "N7" >	
			</br>
			<br>		
				<label> Ingrese cantidad de billetes de 100:</label>
				<input type = "text" name = "N8" >	
			</br>
			<br>
				<button type= "submit"> Enviar </button>
			</br>
		</Form>
			<section>
				<?php
					if (isset($_POST['N1']) != "" && isset($_POST['N2']) != "" && isset($_POST['N3']) != "" && isset($_POST['N4']) != "" && isset($_POST['N5']) != "" && isset($_POST['N6']) != "" && isset($_POST['N7']) != "" && isset($_POST['N8']) != ""){
						$N1 = $_POST['N1'];	
						$N2 = $_POST['N2'];	
						$N3 = $_POST['N3'];	
						$N4 = $_POST['N4'];	
						$N5 = $_POST['N5'];	
						$N6 = $_POST['N6'];	
						$N7 = $_POST['N7'];	
						$N8 = $_POST['N8'];	
						

						//50.000
						$N1 = $N1 * 50000;

						//20.000
						$N2 = $N2 * 20000;

						//10.000
						$N3 = $N3 * 10000;

						//5.000
						$N4 = $N4 * 5000;

						//2.000
						$N5 = $N5 * 2000;

						//1.000
						$N6 = $N6 * 1000;

						//10.000
						$N7 = $N7 * 500;

						//10.000
						$N8 = $N8 * 100;						

						//Total Dinero En Banco
						$total = $N1 + $N2 + $N3 + $N4 + $N5 + $N6 + $N7 + $N8;
						echo("La cantidad de dinero que hay en en banco es: ".$total);
					}
				?>
			</section>
	</BODY>
</html>