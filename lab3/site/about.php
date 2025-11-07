<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>О нас</title>
  <meta charset="utf-8">
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
    <h1>О нашей школе</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Наша история</h3>
    <p>Наша школа была основана в 1990 году и с тех пор мы помогаем ученикам раскрывать свой потенциал.</p>
    <h3>Наши достижения</h3>
    <p>Более 1000 выпускников, множество побед в олимпиадах и конкурсах.</p>
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