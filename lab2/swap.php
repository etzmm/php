<?php
declare(strict_types=1);

/**
 * Анонимная функция для обмена значениями переменных
 * 
 * @param mixed $a Первая переменная (передается по ссылке)
 * @param mixed $b Вторая переменная (передается по ссылке)
 * @return void
 */
$swap = function (&$a, &$b): void {
    $temp = $a;
    $a = $b;
    $b = $temp;
};

// Пример использования
$a = 5;
$b = 8;

$swap($a, $b);

// Проверка
var_dump(5 === $b); // true
var_dump(8 === $a); // true

// Демонстрация результата
echo "После обмена: a = $a, b = $b"; // a = 8, b = 5
?>