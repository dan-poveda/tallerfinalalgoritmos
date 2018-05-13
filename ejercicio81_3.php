<BODY>
<?php
	$idEstate = $_POST['idEstate'];
	$nameEstate = $_POST['nameEstate'];
	$totalSalesE = $valueSalesT + $valueSalesV;	
	echo "<br>El código del Estado es: ".$idEstate;
	echo "<br>El nombre del Estado es: ".$nameEstate;
	echo "<br>El monto en bruto es: ".$totalSalesE;
?>
<li>
	<br><a href="Ejercicio81-1.php" class ="button-volver">Siguiente</a></br>
</li>
</BODY>