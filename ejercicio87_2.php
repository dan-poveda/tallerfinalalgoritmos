
<BODY>
<?php
	$quantityD = $_POST['quantityD'];
	$ticketsM = $_POST['ticketsM'];
	for ($i=0; $i < $quantityD; $i++) { 
	   	$nameS[$i] = $_POST['nameS'.$i];
	   	$valueS[$i] = $_POST['valueS'.$i];
	   	$assistanceS[$i] = $_POST['assistanceS'.$i];
	   	$expensesS[$i] = $_POST['expensesS'.$i];
	}
	$countS = 0;
	for($i = 0; $i < $quantityD;$i++) {
		if($ticketsM < $assistanceS[$i]) {
			$countS++;
		}
	}
	for($i = 0; $i < $quantityD;$i++) {
		if($expensesS[$i] > $valueS[$i]) 
			echo "<br>El espectaculo ".$nameS[$i]." genero perdidas";
	}
	$higherV = 0;
	$codeV = 0;
	$difference = 0;
	
	for($i = 0; $i < $quantityD;$i++) {
		$difference = $valueS[$i]-$expensesS[$i];
		if($higherV < $difference) {
			$higherV = $difference;
			$codeV = $i;
		}
	}
	echo "<br>El espectaculo ".$nameS[$codeV]." registro la mayor ganancia";
	if($countS == 0)
		echo "<br>No hubieron espectaculos en donde se vendieron mas entradas que las establecidas por norma";
	else
		echo "<br>La cantidad de espectaculos en donde se vendieron mas entradas que las establecidas por norma es: ".$countS;
?>
<li>
	<br><a href="../Index.php" class ="button-volver">Volver</a></br>
</li>
</BODY>