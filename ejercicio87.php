<!DOCTYPE html>
<html>
	<title>Ejercicio 87</title>
	
</head>
<BODY>
	<section>		
		<h1>Ejercicio 87</h1>
		<form action="#" method="post">
			<label>Ingrese la cantidad de los ultimos espectaculos realizados en San Cristobal</label>
			<input type="number" name="quantityD">
			<br>
			<label>Ingrese la cantidad máxima de entradas que se deben vender por norma</label>
			<input type="number" name="ticketsM">
			<li>
				<button type= "submit" class="button"> Calcular </button>
			</li>					
		</form>
	</section>
	<section>
		<form action="Ejercicio87_1.php" method="post">			
			<?php
				if (isset($_POST['quantityD'])!= "") {
					$quantityD = $_POST['quantityD'];
					$ticketsM = $_POST['ticketsM'];
					for ($i=0; $i < $quantityD; $i++) { 
						?>
							<label>Ingrese nombre del espectaculo <?php echo ($i+1) ?></label>	
							<input type="text" name="nameS<?php echo $i ?>">
							<br>
						<?php
					}
					?>
						<input type="hidden" name="quantityD" value="<?php echo $quantityD ?>">
						<input type="hidden" name="ticketsM" value="<?php echo $ticketsM ?>">
						<li>
							<button type= "submit" class="button"> Calcular </button>
						</li>	
						<li>
							<br><a href="../Index.php" class ="button-volver">Volver</a></br>
						</li>	
					<?php
				}
			?>
		</form>
	</section>
</body>
</html>