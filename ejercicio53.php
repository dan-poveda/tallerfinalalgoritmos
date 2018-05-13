<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 53 </TITLE>
	</head>
	<BODY>
		<H1> Calculo nomina </H1>
		<section>
			<form action="#" method="post">
				<label> Ingrese la cantidad de empleados que registrara: </label>
				<input type="text" name="size">
				<button type="submit"> Generar </button>
			</form>
			</section>
			<section>
				<?php 
					if(isset($_POST['size'])) {
						$size=$_POST['size'];
						?>
							<form action="Ejercicio53Ex.php" method="post">
							<label>Ingrese el nombre del empleado:</label>
								<?php
									for($i = 1; $i <= $size; $i++) {
										?> 
											<li>
												<label>Ingrese el nombre del empleado <?php echo $i ?>:</label>
												<input type="text" name="name<?php echo@@ $i ?>">
											</li>
										<?php 
									} 
									?>
									<label>Ingrese la nacionalidad del empleado:</label>
									<?php
									for($i = 1; $i <= $size; $i++) {
										?> 	
											<li>
												<label>Ingrese la nacionalidad del empleado (V o E) <?php echo $i ?>:</label>
												<input type="text" name="nacionality<?php echo@@ $i ?>">
											</li>
										<?php
									} 
								?>
								<label>Ingrese La edad del empleado:</label>
								<?php
									for($i = 1; $i <= $size; $i++) {
										?> 	
											<li>
												<label>Ingrese la edad del empleado<?php echo $i ?>:</label>
												<input type="text" name="age<?php echo@@ $i ?>">
											</li>
										<?php
									} 
								?>
								<label>Ingrese el tipo del empleado:</label>
								<?php
									for($i = 1; $i <= $size; $i++) {
										?> 	
											<li> 	
												<label>Ingrese el tipo del empleado(1, 2 o 3)<?php echo $i ?>:</label>
												<input type="text" name="type<?php echo@@ $i ?>">
											</li>
										<?php
									} 
								?>
								<label>Ingrese el numero de horas trabajadas por el empleado:</label>
								<?php
									for($i = 1; $i <= $size; $i++) {
										?> 	
											<li> 	
												<label>Ingrese el numero de horas trabajadas<?php echo $i ?>:</label>
												<input type="text" name="hours<?php echo@@ $i ?>">
											</li>
										<?php
									} 
								?>
								<input type="hidden" name="sizeNumber" value="<?php echo $size ?>" >
								<button type="submit"> Generar </button>
							</form>
						<?php 
					}
				?>
		</section>
	</body>
</html>