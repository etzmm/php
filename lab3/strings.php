<?php
declare(strict_types=1);

$login = ' User ';
$password = 'megaP@ssw0rd';
$name = 'иван';
$email = 'ivan@petrov.ru';
$code = '<?=$login?>';

/**
 * Проверяет сложность пароля
 * 
 * @param string $password Пароль для проверки
 * @return bool Возвращает true если пароль соответствует требованиям сложности
 */
function checkPasswordStrength(string $password): bool
{
    if (strlen($password) < 8) {
        return false;
    }
    
    if (!preg_match('/[A-Z]/', $password)) {
        return false;
    }
    
    if (!preg_match('/[a-z]/', $password)) {
        return false;
    }
    
    if (!preg_match('/[0-9]/', $password)) {
        return false;
    }
    
    return true;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Использование функций обработки строк</title>
</head>
<body>

<?php

// Обработка логина
$login = trim($login);
$login = strtolower($login);

// Проверка сложности пароля
$isPasswordStrong = checkPasswordStrength($password);

// Обработка имени
$name = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");

// Проверка email
$isEmailValid = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

// Вывод результатов
echo "<p>Логин: '{$login}'</p>";
echo "<p>Пароль соответствует требованиям сложности: " . ($isPasswordStrong ? 'Да' : 'Нет') . "</p>";
echo "<p>Имя: {$name}</p>";
echo "<p>Email корректный: " . ($isEmailValid ? 'Да' : 'Нет') . "</p>";
echo "<p>Код: " . htmlspecialchars($code) . "</p>";
?>
</body>
</html>