<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Цикл while</title>
</head>
<body>
	<h1>Цикл while</h1>
	<?php
	/**
	 * Выводит строку посимвольно в столбик
	 * 
	 * @param string $str - строка для вывода
	 * @return void
	 */
	function printStringVertically(string $str): void
	{
		$i = 0;
		$length = mb_strlen($str, 'UTF-8');
		
		while ($i < $length) {
			echo mb_substr($str, $i, 1, 'UTF-8') . "<br>";
			$i++;
		}
	}

	// Создаем переменную и присваиваем ей строковое значение
	$var = 'ПРИВЕТ';
	
	// Вызываем функцию для вывода строки в столбик
	printStringVertically($var);
	?> 
</body>
</html>