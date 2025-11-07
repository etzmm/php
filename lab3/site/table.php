<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';

// Обрабатываем данные из формы
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
    $rows = isset($_GET['rows']) ? (int)$_GET['rows'] : 10;
    $cols = isset($_GET['cols']) ? (int)$_GET['cols'] : 10;
    $color = isset($_GET['color']) ? $_GET['color'] : 'lightblue';
} else {
    // Используем значения по умолчанию
    $rows = 10;
    $cols = 10;
    $color = 'lightblue';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Таблица умножения</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- Верхняя часть страницы -->
    <?php include 'inc/top.inc.php'; ?>
    <!-- Верхняя часть страницы -->
  </header>

  <section>
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action='' method='get'>
      <label>Количество колонок: </label>
      <br>
      <input name='cols' type='text' value='<?php echo $cols; ?>'>
      <br>
      <label>Количество строк: </label>
      <br>
      <input name='rows' type='text' value='<?php echo $rows; ?>'>
      <br>
      <label>Цвет: </label>
      <br>
      <input name='color' type='color' value='<?php echo $color; ?>' list="listColors">
	<datalist id="listColors">
		<option>#ff0000</option>
		<option>#00ff00</option>
		<option>#0000ff</option>
        <option>#ffff00</option>
        <option>#ff00ff</option>
        <option>#00ffff</option>
	</datalist>
      <br>
      <br>
      <input type='submit' value='Создать'>
    </form>
    <br>
    <!-- Таблица -->
    <?php getTable($rows, $cols, $color); ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </section>
  <nav>
    <!-- Навигация -->
    <?php include 'inc/menu.inc.php'; ?>
    <!-- Навигация -->
  </nav>
  <footer>
    <!-- Нижняя часть страницы -->
    <?php include 'inc/bottom.inc.php'; ?>
    <!-- Нижняя часть страницы -->
  </footer>
</body>
</html>