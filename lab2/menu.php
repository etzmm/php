<?php
declare(strict_types=1);
/**
 * Создает массив меню с пунктами и ссылками
 * 
 * @return array
 */
function createMenuArray(): array
{
    return [
        ['link' => 'Домой', 'href' => 'index.php'],
        ['link' => 'О нас', 'href' => 'about.php'],
        ['link' => 'Контакты', 'href' => 'contact.php'],
        ['link' => 'Таблица умножения', 'href' => 'table.php'],
        ['link' => 'Калькулятор', 'href' => 'calc.php']
    ];
}

$leftMenu = createMenuArray();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Меню</title>
</head>
<body>
	<h1>Меню</h1>
	<nav>
	<?php
	/**
	 * Отрисовывает меню из массива
	 * 
	 * @param array $menuArray - массив с элементами меню
	 * @return void
	 */
	function renderMenu(array $menuArray): void
	{
		echo '<ul class="menu">';
		foreach ($menuArray as $menuItem) {
			echo '<li><a href="' . $menuItem['href'] . '">' . $menuItem['link'] . '</a></li>';
		}
		echo '</ul>';
	}
	
	// Отрисовываем меню
	renderMenu($leftMenu);
	?> 
	</nav>
</body>
</html>