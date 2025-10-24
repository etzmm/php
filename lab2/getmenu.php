<?php
declare(strict_types=1);

/**
 * Создает массив с элементами меню
 * 
 * @return array<array{link: string, href: string}> Массив элементов меню
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

/**
 * Генерирует HTML-разметку для меню
 * 
 * @param array<array{link: string, href: string}> $menu Массив элементов меню
 * @param bool $vertical Флаг вертикального отображения (true - вертикально, false - горизонтально)
 * @return void
 */
function getMenu(array $menu, bool $vertical = true): void
{
    $class = $vertical ? 'menu vertical' : 'menu horizontal';
    
    echo "<ul class='{$class}'>";
    
    foreach ($menu as $item) {
        echo "<li><a href='{$item['href']}'>{$item['link']}</a></li>";
    }
    
    echo "</ul>";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <style>
        .menu {
            list-style-type: none;
            margin: 0;	
            padding: 0;
        }

        .vertical li {
            margin: 5px 0;
        }

        .horizontal li {
            display: inline;
            padding: 5px;
            margin-right: 10px;
        }
        
        .horizontal li:not(:last-child) {
            border-right: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <h1>Меню</h1>
    
    <?php
    $leftMenu = createMenuArray();
    
    // ЗАДАНИЕ 3: Вертикальное меню (один параметр)
    echo "<h2>Вертикальное меню</h2>";
    getMenu($leftMenu);
    
    // ЗАДАНИЕ 4: Горизонтальное меню (второй параметр false)
    echo "<h2>Горизонтальное меню</h2>";
    getMenu($leftMenu, false);
    ?>
</body>
</html>