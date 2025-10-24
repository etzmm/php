<?php
declare(strict_types=1);

/**
 * Генерирует HTML-таблицу умножения
 * 
 * @param int $cols Количество столбцов (по умолчанию 5)
 * @param int $rows Количество строк (по умолчанию 5)
 * @param string $color Цвет заголовков (по умолчанию 'yellow')
 * @return int Количество вызовов функции
 */
function getTable(int $cols = 5, int $rows = 5, string $color = 'yellow'): int
{
    static $count = 0;
    $count++;
    
    echo "<h2>Таблица умножения {$cols} × {$rows}</h2>";
    echo "<table>";
    
    // Первая строка - заголовки столбцов
    echo "<tr>";
    echo "<th style='background-color: {$color};'>×</th>";
    for ($i = 1; $i <= $cols; $i++) {
        echo "<th style='background-color: {$color};'>{$i}</th>";
    }
    echo "</tr>";
    
    // Основные строки таблицы
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        echo "<th style='background-color: {$color};'>{$i}</th>";
        for ($j = 1; $j <= $cols; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<br>";
    
    return $count;
}
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
        }
    </style>
</head>
<body> 
    <h1>Таблица умножения</h1>
    <?php
    // Вызов функции с разными параметрами
    $count1 = getTable(5, 6, 'lightblue');
    $count2 = getTable(10, 10, 'lightgreen');
    $count3 = getTable(8, 2, 'lightcoral');
    
    // Вызов функции с параметрами по умолчанию
    $count4 = getTable(); // 5×5, желтый цвет
    $count5 = getTable(7); // 7×5, желтый цвет
    $count6 = getTable(6, 8); // 6×8, желтый цвет
    
    // Вывод общего количества вызовов
    echo "<h3>Общее количество вызовов функции: " . $count6 . "</h3>";
    ?>
</body>
</html>