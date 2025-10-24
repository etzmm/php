<?php
declare(strict_types=1);

/**
 * Применяет коллбэк-функцию к каждому элементу массива
 * 
 * @param array $array Исходный массив
 * @param callable $callback Функция, применяемая к каждому элементу
 * @return array Новый массив с результатами применения коллбэка
 */
function map(array $array, callable $callback): array
{
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = $callback($value);
    }
    return $result;
}

// Пример использования с массивом чисел и стрелочной функцией
$numbers = [1, 2, 3, 4, 5];

// Стрелочная функция, возводящая число в квадрат
$squaredNumbers = map($numbers, fn($n) => $n ** 2);

// Вывод результата
echo "Исходный массив: " . implode(', ', $numbers) . "\n";
echo "Квадраты чисел: " . implode(', ', $squaredNumbers) . "\n";

// Дополнительная проверка
var_dump($squaredNumbers); // [1, 4, 9, 16, 25]
?>