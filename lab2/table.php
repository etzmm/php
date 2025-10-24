<?php
declare(strict_types=1);

/**
 * Создание таблицы умножения заданного размера
 * 
 * @param int $cols - количество столбцов
 * @param int $rows - количество строк
 * @return void
 */
function createMultiplicationTable(int $cols, int $rows): void
{
    echo '<table>';
    
    // Создание заголовока таблицы
    echo '<tr>';
    echo '<th></th>'; // Пустая ячейка в левом верхнем углу
    for ($col = 1; $col <= $cols; $col++) {
        echo '<th>' . $col . '</th>';
    }
    echo '</tr>';
    
    // Создание строк таблицы
    for ($row = 1; $row <= $rows; $row++) {
        echo '<tr>';
        // Первая ячейка в строке - заголовок
        echo '<th>' . $row . '</th>';
        
        // Заполнение ячейки произведениями
        for ($col = 1; $col <= $cols; $col++) {
            echo '<td>' . ($row * $col) . '</td>';
        }
        echo '</tr>';
    }
    
    echo '</table>';
}

// Создание переменных
$cols = 10;
$rows = 10;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Таблица умножения</title>
	<style>
		table {
			border: 2px solid black;
			border-collapse: collapse;
		}

		th,
		td {
			padding: 10px;
			border: 1px solid black;
			text-align: center;
		}

		th {
			background-color: yellow;
			font-weight: bold;
		}
		
		td {
			background-color: white;
		}
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php
	// Вызываем функцию для создания таблицы умножения
	createMultiplicationTable($cols, $rows);
	?> 
</body>
</html>