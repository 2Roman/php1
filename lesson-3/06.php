<?php

$arr = [
	'Московская область' => [
		explode(', ', 'Санкт-Петербург, Всеволожск, Павловск, Кронштадт'),
	],
	'Ленинградская область' => [
		explode(', ', 'Санкт-Петербург, Всеволожск, Павловск, Кронштадт'),
	],
	'Ростовская область' => [
		explode(', ', 'Ростов-на-Дону, Азов, Батайск, Донецк, Шахты, Новочеркасск'),
	],
];
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Заголовок страницы</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<nav>
	Меню навигации<br>

	<?php
		foreach ($arr as $key => $value) {
			echo "<p>$key</p><ul>";
			foreach ($value[0] as $key2 => $value2) {
				echo "<li>$value2</li>";
			}
			echo "</ul>";
		}
	?>
</nav>

<aside>Боковая колонка SideBar</aside>

<article>
 Контент - основное содержимое страницы.
</article>

<footer><?= date('Y') ?></footer>

</body>
</html>






