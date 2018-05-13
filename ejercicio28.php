<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 28 </TITLE>
	</head>
	<BODY>
		<H1> Compra de varias piezas </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese el valor total de la compra :</label>
				<input type = "text" name = "valuePurchase" >	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['valuePurchase']) != ""){			
						$valuePurchase = $_POST['valuePurchase'];
						if ($valuePurchase > 500000) {
							$money = $valuePurchase * 0.55;
							$loanBank= $valuePurchase * 0.3;
							$credit = $valuePurchase * 0.15; 
							$interest = $credit * 0.2;
							$valueCredit = $credit + $interest;
							echo "<br>La cantidad a invertir es de: ".$money;
							echo "<br>La cantidad a pagar a credito es de: ".$valueCredit;
							echo "<br>La cantidad a pagar por intereses es de: ".$interest;
							echo "<br>La cantidad  prestada por el banco es de: ".$loanBank;
						}
						elseif ($valuePurchase <= 500000) {
							$moneyEsle = $valuePurchase * 0.7;
							$creditElse = $valuePurchase * 0.3;
							$interestElse = $creditElse * 0.2;
							$valueCreditElse = $creditElse + $interestElse;
							echo "<br>La cantidad a invertir en la empresa es de: ".$moneyEsle;
							echo "<br>La cantidad a pagar a credito es de: ".$valueCreditElse;
							echo "<br>La cantidad a pagar por intereses es de: ".$interestElse;
						}
						
					}
				?>
			</section>
	</BODY>
</html>