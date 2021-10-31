<?php

session_start();

?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Товары магазина "Рога без копыт"</title>
</head>
<body>

<article>
Товары магазина "Рога без копыт"<br><br>

 <div>HD Телевизор Xiaomi Mi TV 4A (L32M5-5ARU) 32"
 Цена 16 999 ₽
 <a href="/lesson-7/add.php?product_id=1">Добавить</a>
</div>

<div>Комплект Cam-модуль НТВ Плюс CI+ с картой и договором (Запад)
 Цена  2 490 ₽
 <a href="/lesson-7/add.php?product_id=2">Добавить</a>
 </div>

 <div> Брюки Sela
 Цена 1 949 ₽
 <a href="/lesson-7/add.php?product_id=3">Добавить</a>
 </div>

 <div> Шарф Sela
 Цена 2 949 ₽
 <a href="/lesson-7/add.php?product_id=4">Добавить</a>
 </div>

</article>

<a href="/lesson-7/card.php">Корзина</a><br>

<footer>Шёл <?= date('Y') ?> год...</footer>

</body>
</html>
