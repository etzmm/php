<?php
/**
 * Функция для генерации таблицы умножения
 */
function getTable($rows, $cols, $color) {
    // Ограничиваем размеры таблицы для безопасности
    $rows = min(max(1, $rows), 20);
    $cols = min(max(1, $cols), 20);
    
    echo "<table border='1' width='100%' style='border-collapse: collapse;'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if ($tr == 1 || $td == 1) {
                echo "<td bgcolor='$color' style='padding: 10px; text-align: center; font-weight: bold;'>" . $tr * $td . "</td>";
            } else {
                echo "<td style='padding: 10px; text-align: center;'>" . $tr * $td . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

/**
 * Функция для генерации меню навигации
 */
function getMenu($menu, $vertical = true) {
    $style = $vertical ? "" : " style='display:inline; margin-right:15px'";
    
    echo "<ul>";
    foreach ($menu as $item) {
        $current = (basename($_SERVER['PHP_SELF']) == $item['href']) ? " class='current'" : "";
        echo "<li$style$current><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    echo "</ul>";
}
?>