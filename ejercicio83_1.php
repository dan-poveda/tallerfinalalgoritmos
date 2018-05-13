<?php
	$sizeCt = $_POST['sizeCt'];
	$j=0;
	for ($i=0; $i < $sizeCt; $i++) { 
		$ct[$i] = $_POST['nameCt'.$i];
		$hab[$j] = $_POST['HabSen'.$i];
		$j++;
		$hab[$j] = $_POST['HabDoble'.$i];			
		$j++;
		$rest[$i] = $_POST['Rest'.$i];
	}

	echo "Centros turisticos <br>";
	$j=0;
	$higherS = 0;
	$higherD = 0;
	$total = 0;
	for ($i=0; $i < $sizeCt; $i++) {
		echo $ct[$i]."<br>";
		echo "Habitaciones sencillas ".$hab[$j]."<br>";
		if($higherS < $hab[$j]){
			$higherS = $hab[$j];
			$codeS = $ct[$i];
		}
		$sum = $sum + $hab[$j];
		$j++;
		echo "Habitaciones dobles ".$hab[$j]."<br>";	
		if($higherD < $hab[$j]){
			$higherD = $hab[$j];
			$codeD = $ct[$i];
		}		
		$sum = $sum + $hab[$j];
		$j++;
		echo "Restaurantes ".$rest[$i]."<br>";
		if($total < $sum){
			$total = $sum;
			$codeT = $ct[$i];
		}	
	}

	echo "<br>El centro turistico con más restaurantes <br>";
	$auxRest = 0;
	$auxCT = "";
	for ($i=0; $i < $sizeCt; $i++) { 
		if ($rest[$i] > $auxRest) {
			$auxRest = $rest[$i];
			$auxCT = $ct[$i];
		}
	}

	echo $auxCT."<br>";		
	echo "Con ".$auxRest." Restaurantes <br>";

	echo "<br>El centro turistico con más habitaciones sencillas es $codeS <br>";
	echo "<br>El centro turistico con más habitaciones dobles es $codeD <br>";
	echo "<br>El centro turistico con más habitaciones totales es $codeT <br>";
?>