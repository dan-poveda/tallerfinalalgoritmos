<!DOCTYPE html>
<html>
	<head> 
		<TITLE>EJjercicio 81</TITLE>
	</head>
	<BODY>
		<H1> Ejercicio 81 </H1>
			<section>
				<form action="Ejercicio81_1.php" method="post">
					<li>
						<label>Ingrese el código de la ciudad (Recuerde que debe ser de 3 digitos):</label>
						<input type="text" name="idCity">
					</li>
					<li>
						<label>Ingrese el nombre de la ciudad:</label>
						<input type="text" name="nameCity">
					</li>
					<li>
						<label>Ingrese El total de las ventas realizadas por la tienda:</label>
						<input type="text" name="valueSalesT">
					</li>
					<li>
						<label>Ingrese la cantidad de unidades vendidas por este:</label>
						<input type="text" name="totalUnitsV">
					</li>
					<li>
						<label>Ingrese el total de las ventas realizadas por el vendedor:</label>
						<input type="text" name="valueSalesV">
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