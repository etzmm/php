<?php
define('SITE_NAME', 'Мой сайт');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
	if (defined('SITE_NAME')) {
		echo "<p>Название сайта: " . SITE_NAME . "</p>";
	} else {
		echo "<p>Константа SITE_NAME не определена</p>";
	}

	echo "<p>Текущая версия PHP: " . PHP_VERSION . "</p>";
	echo "<p>Директория скрипта: " . __DIR__ . "</p>";
	?>
</body>
</html>
