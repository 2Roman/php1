<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Заголовок страницы</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
  $images = scandir('/var/www/html/lesson-4/uploads/');

  foreach ($images as $image) {
    if ( in_array( $image, array( ".",".." ) ) ) continue;
    echo "<a href=\"/lesson-4/uploads/$image\" target=\"_blank\">
          <img src=\"/lesson-4/uploads/$image\" width=\"200\">
         </a><br>";
  }
?>

<article>
 Контент - основное содержимое страницы.<br><br>
</article>

<br>

<footer><?= date('Y') ?></footer>

</body>
</html>
