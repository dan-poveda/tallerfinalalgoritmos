<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 49 </TITLE>
	</head>
	<BODY>
		<H1> Cantidad de personas </H1>
			<section>
			<form action="#" method="post">
				<label> Ingrese la cantidad de personas: </label>
				<input type="text" name="size">
				<button type="submit"> Generar </button>
			</form>
			</section>
			<section>
				<?php 
					if(isset($_POST['size'])) {
						$size=$_POST['size'];
						?>
							<form action="Ejercicio49Ex.php" method="post">
								<?php
									for($i = 1; $i <= $size; $i++) {
										?> 
											<li>
												<li><label>Pregunta 1: ¿Un triangulo es una figura de tres lados?</label></li>
												<li><label>Digite 1 si la respuesta es: "Si"</label></li>
												<li><label>Digite 2 si la respuesta es: "No"</label></li>
												<input type="text" name="answer1">
											</li>
												<li>
												<li><label>Pregunta 2: ¿La capital del mundo es Nueva York?</label></li>
												<li><label>Digite 1 si la respuesta es: "Si"</label></li>
												<li><label>Digite 2 si la respuesta es: "No"</label></li>
												<input type="text" name="answer2">
											</li>
											<li>
												<li><label>Pregunta 3: ¿Mexico Esta Ubicado En El Continente Americano?</label></li>
												<li><label>Digite 1 si la respuesta es: "Si"</label></li>
												<li><label>Digite 2 si la respuesta es: "No"</label></li>
												<input type="text" name="answer3">
											</li>
										<?php 
										} 
									?>
								<input type="hidden" name="sizeNumber" value="<?php echo $size ?>" >
								<li><button type="submit"> Generar </button></li>
							</form>
						<?php 
					}
				?>
		</section>
	</body>
</html>