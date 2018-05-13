<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 36 </TITLE>
	</head>
	<BODY>
		<H1> Cantida entera de Bolivares </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Ingrese la cantidad de dinero: </label>
				<input type = "text" name = "bolivares">	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['bolivares']) != ""){			
						$bolivares = $_POST['bolivares'];
						
						
						if ($bolivares >= 10 && $bolivares < 20) {
							$ten = round($bolivares/10);
							echo "La cantidad de billetes de 10 bolivares es: ".$ten;
						}
							elseif ($bolivares >= 20 && $bolivares < 100) {
							$ten = round($bolivares / 10);
							$twenty =round($bolivares / 20);
							echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
							echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
						}
							elseif ($bolivares >= 100 && $bolivares < 500) {
								$ten = round($bolivares / 10);
								$twenty =round($bolivares / 20);
								$hundred = round($bolivares / 100);
								echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
								echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
								echo "<br>La cantidad de billetes de 100 bolivares es: ".$hundred;
							}
								elseif ($bolivares >= 500 && $bolivares < 1000) {
									$ten = round($bolivares / 10);
									$twenty =round($bolivares / 20);
									$hundred = round($bolivares / 100);
									$fiveHundred = round($bolivares / 500);
									echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
									echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
									echo "<br>La cantidad de billetes de 100 bolivares es: ".$hundred;
									echo "<br>La cantidad de billetes de 500 bolivares es: ".$fiveHundred;
								}
									elseif ($bolivares >= 1000 && $bolivares < 2000) {
										$ten = round($bolivares / 10);
										$twenty =round($bolivares / 20);
										$hundred = round($bolivares / 100);
										$fiveHundred = round($bolivares / 500);
										$thousand = round($bolivares / 1000);
										echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
										echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
										echo "<br>La cantidad de billetes de 100 bolivares es: ".$hundred;
										echo "<br>La cantidad de billetes de 500 bolivares es: ".$fiveHundred;
										echo "<br>La cantidad de billetes de 1000 bolivares es: ".$thousand;
									}
										elseif ($bolivares >= 2000 && $bolivares < 5000) {
											$ten = round($bolivares / 10);
											$twenty =round($bolivares / 20);
											$hundred = round($bolivares / 100);
											$fiveHundred = round($bolivares / 500);
											$thousand = round($bolivares / 1000);
											$twoThousand = round($bolivares / 2000);
											echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
											echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
											echo "<br>La cantidad de billetes de 100 bolivares es: ".$hundred;
											echo "<br>La cantidad de billetes de 500 bolivares es: ".$fiveHundred;
											echo "<br>La cantidad de billetes de 1000 bolivares es: ".$thousand;
											echo "<br>La cantidad de billetes de 2000 bolivares es: ".$twoThousand;
										}
											elseif ($bolivares >= 5000 && $bolivares < 10000) {
												$ten = round($bolivares / 10);
												$twenty =round($bolivares / 20);
												$hundred = round($bolivares / 100);
												$fiveHundred = round($bolivares / 500);
												$thousand = round($bolivares / 1000);
												$twoThousand = round($bolivares / 2000);
												$fiveThousand = round($bolivares / 5000);
												echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
												echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
												echo "<br>La cantidad de billetes de 100 bolivares es: ".$hundred;
												echo "<br>La cantidad de billetes de 500 bolivares es: ".$fiveHundred;
												echo "<br>La cantidad de billetes de 1000 bolivares es: ".$thousand;
												echo "<br>La cantidad de billetes de 2000 bolivares es: ".$twoThousand;
												echo "<br>La cantidad de billetes de 5000 bolivares es: ".$fiveThousand;
											}
												elseif ($bolivares >= 10000 && $bolivares < 20000) {
													$ten = round($bolivares / 10);
													$twenty =round($bolivares / 20);
													$hundred = round($bolivares / 100);
													$fiveHundred = round($bolivares / 500);
													$thousand = round($bolivares / 1000);
													$twoThousand = round($bolivares / 2000);
													$fiveThousand = round($bolivares / 5000);
													$tenThousand = round($bolivares / 10000);
													echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
													echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
													echo "<br>La cantidad de billetes de 100 bolivares es: ".$hundred;
													echo "<br>La cantidad de billetes de 500 bolivares es: ".$fiveHundred;
													echo "<br>La cantidad de billetes de 1000 bolivares es: ".$thousand;
													echo "<br>La cantidad de billetes de 2000 bolivares es: ".$twoThousand;
													echo "<br>La cantidad de billetes de 5000 bolivares es: ".$fiveThousand;
													echo "<br>La cantidad de billetes de 10000 bolivares es: ".$tenThousand;
												}
													elseif ($bolivares >= 20000 && $bolivares < 50000) {
														$ten = round($bolivares / 10);
														$twenty =round($bolivares / 20);
														$hundred = round($bolivares / 100);
														$fiveHundred = round($bolivares / 500);
														$thousand = round($bolivares / 1000);
														$twoThousand = round($bolivares / 2000);
														$fiveThousand = round($bolivares / 5000);
														$tenThousand = round($bolivares / 10000);
														$twentyThousand = round($bolivares / 20000);
														echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
														echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
														echo "<br>La cantidad de billetes de 100 bolivares es: ".$hundred;
														echo "<br>La cantidad de billetes de 500 bolivares es: ".$fiveHundred;
														echo "<br>La cantidad de billetes de 1000 bolivares es: ".$thousand;
														echo "<br>La cantidad de billetes de 2000 bolivares es: ".$twoThousand;
														echo "<br>La cantidad de billetes de 5000 bolivares es: ".$fiveThousand;
														echo "<br>La cantidad de billetes de 10000 bolivares es: ".$tenThousand;
														echo "<br>La cantidad de billetes de 20000 bolivares es: ".$twentyThousand;
													}
														elseif ($bolivares > 50000) {
															$ten = round($bolivares / 10);
															$twenty =round($bolivares / 20);
															$hundred = round($bolivares / 100);
															$fiveHundred = round($bolivares / 500);
															$thousand = round($bolivares / 1000);
															$twoThousand = round($bolivares / 2000);
															$fiveThousand = round($bolivares / 5000);
															$tenThousand = round($bolivares / 10000);
															$twentyThousand = round($bolivares / 20000);
															$fiftyThousand = round($bolivares / 50000);
															echo "La cantidad de billetes de 10 bolivares es: ".$ten;								
															echo "<br>La cantidad de billetes de 20 bolivares es: ".$twenty;
															echo "<br>La cantidad de billetes de 100 bolivares es: ".$hundred;
															echo "<br>La cantidad de billetes de 500 bolivares es: ".$fiveHundred;
															echo "<br>La cantidad de billetes de 1000 bolivares es: ".$thousand;
															echo "<br>La cantidad de billetes de 2000 bolivares es: ".$twoThousand;
															echo "<br>La cantidad de billetes de 5000 bolivares es: ".$fiveThousand;
															echo "<br>La cantidad de billetes de 10000 bolivares es: ".$tenThousand;
															echo "<br>La cantidad de billetes de 20000 bolivares es: ".$twentyThousand;
															echo "<br>La cantidad de billetes de 50000 bolivares es: ".$fiftyThousand;
														}
					}
				?>
			</section>
	</BODY>
</html>