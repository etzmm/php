<?php
declare(strict_types=1);

$now = time();
$birthday = mktime(0, 0, 0, 6, 18, 2005);
$hour = getdate()['hours'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Использование функций даты и времени</title>
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php

	// Определение приветствия
	if ($hour >= 0 && $hour < 6) {
		$welcome = 'Доброй ночи';
	} elseif ($hour >= 6 && $hour < 12) {
		$welcome = 'Доброе утро';
	} elseif ($hour >= 12 && $hour < 18) {
		$welcome = 'Добрый день';
	} elseif ($hour >= 18 && $hour <= 23) {
		$welcome = 'Добрый вечер';
	} else {
		$welcome = 'Доброй ночи';
	}

	echo "<p>{$welcome}</p>";

	// Установка локали и форматирование даты
	setlocale(LC_ALL, 'ru_RU.UTF-8');
	
	$formatter = new IntlDateFormatter(
		'ru_RU', 
		IntlDateFormatter::FULL, 
		IntlDateFormatter::MEDIUM
	);
	
	$currentDate = $formatter->format($now);
	echo "<p>Сегодня {$currentDate}</p>";

	// Расчет времени до дня рождения
	$timeUntilBirthday = $birthday - $now;
	
	if ($timeUntilBirthday > 0) {
		$days = floor($timeUntilBirthday / (60 * 60 * 24));
		$hours = floor(($timeUntilBirthday % (60 * 60 * 24)) / (60 * 60));
		$minutes = floor(($timeUntilBirthday % (60 * 60)) / 60);
		$seconds = $timeUntilBirthday % 60;
		
		echo "<p>До моего дня рождения осталось:</p>";
		echo "<p>{$days} дней, {$hours} часов, {$minutes} минут, {$seconds} секунд</p>";
	} else {
		echo "<p>Мой день рождения уже прошел в этом году</p>";
	}
	?>
</body>
</html>