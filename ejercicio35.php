<!DOCTYPE html>
<html>
	<head> 
		<TITLE> Ejercicio 35 </TITLE>
	</head>
	<BODY>
		<H1> Temperatura en grados  </H1>
		<Form Action= "#" method = "post">			
			<li>
				<label> Temperatura en grados Farenheit (°F): </label>
				<input type = "text" name = "gradesFarenheit">	
			</li>			
			<li>
				<button type= "submit"> Calcular </button>
			</li>
		</Form>
			<section>
				<?php
					if (isset($_POST['gradesFarenheit']) != ""){			
						$gradesFarenheit = $_POST['gradesFarenheit'];
						if ($gradesFarenheit > 85) {
							echo "El deporte apropiado para practicar es: Natación";
						}
							elseif ($gradesFarenheit <= 85 && $gradesFarenheit > 70) {
							echo "El deporte apropiado para practicar es: Tenis";
						}
							elseif ($gradesFarenheit <= 70 && $gradesFarenheit > 32) {
								echo "El deporte apropiado para practicar es: Golf";
							}
									elseif ($gradesFarenheit <= 32 && $gradesFarenheit > 10) {
										echo "El deporte apropiado para practicar es: Esquí";
									}
										elseif ($gradesFarenheit <= 10) {
											echo "El deporte apropiado para practicar es: Marcha";
										}
					}
				?>
			</section>
	</BODY>
</html>