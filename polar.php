<html>
	<head> 
		<meta charset = "UTF-8"><title></title>
	</head>
	<body>
		<img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Polar_coordinates.svg/250px-Polar_coordinates.svg.png" alt = "polar">
		<p><br></p>
		<form method = "GET">
		    <p>Введите координату x
			<input type = "text" name = "firstArg" value = "<?php
			if (isset($_GET['firstArg'])){
					echo htmlspecialchars($_GET['firstArg']);
				}
				?>">
			</p>
			<p>Введите координату y 
			<input type = "text" name = "secondArg" value = "<?php
			if (isset($_GET['secondArg'])){
					echo htmlspecialchars($_GET['secondArg']);
				}
				?>">
			</p>
			
			<input type = "submit" name = "compute" value = "Рассчитать">
		</form>
			<?php
				if (isset($_GET['firstArg']) && isset($_GET['secondArg']))
				{
					if (preg_match('|^(?=.*[0-9]).*$|', $_GET['firstArg']) == 0)
					{
						echo("<p>Введены нечисловые данные!!!<p>");
					}
					else
					{
						if (preg_match('|^(?=.*[0-9]).*$|', $_GET['secondArg']) == 0)
						{
							echo("<p>Введены нечисловые данные!!!<p>");
						}
						elseif ((($_GET['firstArg']) == 0) or  (($_GET['secondArg']) == 0))
						{
							$vector_length = sqrt(pow(intval($_GET['firstArg']),2) + pow(intval($_GET['secondArg']), 2));
						$arсtan_angle='0';
								$output = number_format($vector_length, 2, ',', '');
								echo  'Длина вектора OP: '.$output. "<br/>";
								echo 'Полярный угол Ф (градусы): '.$arсtan_angle. "<br/>";
						} 
						else	
						{
							if (($_GET['secondArg'])!=0) {
								$vector_length = sqrt(pow(intval($_GET['firstArg']),2) + pow(intval($_GET['secondArg']), 2));
								$arсtan_angle = rad2deg(atan((intval($_GET['secondArg'])) / (intval($_GET['firstArg']))));
								$output = number_format($vector_length, 2, ',', '');
								echo  'Длина вектора OP: '.$output. "<br/>";
								echo 'Полярный угол Ф (градусы): '.$arсtan_angle. "<br/>";
							}
							else {
								echo "Вектор ОР и угол Ф равны 0";
							}
						}	
					}
				}
			?>
	</body>
</html>
