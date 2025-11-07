<?php
declare(strict_types=1);

/**
 * Выводит все определенные в PHP константы в точном формате как в примере
 * 
 * @return void
 */
function displayAllConstants(): void
{
    $constants = get_defined_constants(true);
    
    echo "Array\n(\n";
    
    foreach ($constants as $category => $categoryConstants) {
        echo "    [$category] => Array\n    (\n";
        
        foreach ($categoryConstants as $name => $value) {
            $formattedValue = formatConstantValue($value);
            echo "            [$name] => $formattedValue\n";
        }
        
        echo "    )\n\n";
    }
    
    echo ")\n";
}

/**
 * Форматирует значение константы для вывода
 * 
 * @param mixed $value Значение константы
 * @return string Отформатированное строковое представление значения
 */
function formatConstantValue($value): string
{
    if ($value === null) {
        return '';
    } elseif ($value === true) {
        return '1';
    } elseif ($value === false) {
        return '';
    } elseif (is_string($value)) {
        return $value;
    } elseif (is_numeric($value)) {
        return (string)$value;
    } else {
        return var_export($value, true);
    }
}

// Выводим все константы
displayAllConstants();
?>