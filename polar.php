<html>
	<head> 
		<meta charset = "UTF-8"><title></title>
	</head>
	<body>
		<img src = "http://www.studfiles.ru/html/2706/22/html_G8_dFlsQr0.lKDI/htmlconvd-ebTmxT_html_m6e4b5fa3.gif" alt = "polar">
		<p><br></p>
		<form method = "GET">
			<input type = "text" name = "firstArg" value = "" placeholder = "Координата Х">
			<input type = "text" name = "secondArg" value = "" placeholder = "Координата Y">
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
							echo $output. "<br/>";
							echo $arсtan_angle. "<br/>";
						}	
					}
				}
			?>
	</body>
</html>