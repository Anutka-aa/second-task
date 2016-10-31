<html>
	<head> 
		<meta charset = "UTF-8"><title></title>
	</head>
	<body>
	  <form method = "GET">
		<img src = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Polar_coordinates.svg/250px-Polar_coordinates.svg.png" alt = "polar">
		<p><br></p>
		    <p>Введите координату X
			<input type="text" name="x" value= "" placeholder = "Координата Х"<?php 
				if (isset($_GET['x'])){
					echo htmlspecialchars($_GET['x']);
				}
			?>">
			</p>
		    <p>Введите Введите координату У
			<input type="text" name="y" value= "" placeholder = "Координата Y"<?php 
				if (isset($_GET['y'])){
					echo htmlspecialchars($_GET['y']);
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
						else
						{
							$vector_length = sqrt(pow(intval($_GET['firstArg']),2) + pow(intval($_GET['secondArg']), 2));
							$arсtan_angle = rad2deg(atan((intval($_GET['secondArg'])) / (intval($_GET['firstArg']))));
							$output = number_format($vector_length, 2, ',', '');
							echo  'Длина вектора OP: '.$output. "<br/>";
							echo 'Полярный угол Ф'.$arсtan_angle. "<br/>";
						}	
					}
				}
			?>
	</body>
</html>