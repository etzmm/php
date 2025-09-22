<?php
$name = 'Иван';
$age = 20;
$output1 = "Меня зовут: $name";
$output2 = "Мне $age лет";
$output3 = "Тип переменной \$name: " . gettype($name);
$output4 = "Тип переменной \$age: " . gettype($age);

unset($name, $age);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
</head>
<body>
	<h1>Переменные и вывод</h1>
	<p><?php echo $output1; ?></p>
	<p><?php echo $output2; ?></p>
	<p><?php echo $output3; ?></p>
	<p><?php echo $output4; ?></p>
</body>
</html>
