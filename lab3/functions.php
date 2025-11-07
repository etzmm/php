<?php
declare(strict_types=1);

/**
 * Выводит все функции для каждого загруженного модуля
 * 
 * @return int Общее количество функций
 */
function displayAllExtensionFunctions(): int
{
    $extensions = get_loaded_extensions();
    $totalFunctions = 0;
    
    foreach ($extensions as $extension) {
        echo $extension . "\n\n";
        
        $functions = get_extension_funcs($extension);
        
        echo "Array\n(\n";
        
        if ($functions !== false) {
            foreach ($functions as $index => $function) {
                echo "    [{$index}] => {$function}\n";
            }
            $totalFunctions += count($functions);
        }
        
        echo ")\n\n";
    }
    
    return $totalFunctions;
}

// Выводим все функции для каждого модуля
$totalFunctions = displayAllExtensionFunctions();

// Выводим общее количество функций
echo "Общее количество функций: {$totalFunctions}\n";
?>