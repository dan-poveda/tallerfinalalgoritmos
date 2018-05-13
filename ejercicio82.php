<!DOCTYPE html>
<html>
	<head> 
		<TITLE>Ejercicio 81</TITLE>
	</head>
	<BODY>
		<H1> Ejercicio 81</H1>
			<section>
				<form action="Ejercicio81_3.php" method="post">
					<li>
						<label>Ingrese el código del estado (Recuerde que debe ser de 5 digitos):</label>
						<input type="text" name="idEstate">
					</li>
					<li>
						<label>Ingrese el nombre Del estado:</label>
						<input type="text" name="nameEstate">
					</li>	
					<li>
						<button type= "submit" class="button"> Calcular </button>
					</li>
					<li>
						<input type="hidden" name="idCity" value="idCity">
						<br><a href="../Index.php" class ="button-volver">Volver</a></br>
					</li>
				</form>
			</section>
	</body>
</html>