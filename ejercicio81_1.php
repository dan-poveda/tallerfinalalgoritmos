
<BODY >
<?php
	$idCity = $_POST['idCity'];
	$nameCity = $_POST['nameCity'];
	$valueSalesT = $_POST['valueSalesT'];
	$totalUnitsV = $_POST['totalUnitsV'];
	$valueSalesV = $_POST['valueSalesV'];
	$totalSales = $valueSalesT + $valueSalesV;	
	$idT = 11;
	$idV = 12;
	$commissionT = $valueSalesT * 0.1;
	$commissionV = $valueSalesV * 0.15;
	if ($valueSalesT == $valueSalesT) {
		echo "<br>El código de la tienda con mayor venta es de: ".$idT;
	}
	if ($totalUnitsV == $totalUnitsV) {
		echo "<br>El código de la tienda con menor numero de unidades vendidas es de: ".$idV;
	}
	echo "<br>El código de la ciudad es: ".$idCity;
	echo "<br>El nombre de la ciudad es: ".$nameCity;
	echo "<br>El total de unidades es: ".$totalUnitsV;
	echo "<br>El monto en bruto es: ".$totalSales;
	echo "<br>El monto por comisiones de tiendas es: ".$commissionT;
	echo "<br>El monto por comisiones de vendedores de calle es: ".$commissionV;
	echo "<br>El código del canal es: ".$idT.$idV;
?>
<li>
	<br><a href="Ejercicio81_2.php" class ="button-volver">Siguiente</a></br>
</li>
</BODY>