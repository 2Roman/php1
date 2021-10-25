<?php

require_once 'db.php';

$id = $_GET['id'] ?? null;

if ( $id && is_numeric( $id ) ) {
	$result = mysqli_query( $link, 'select image_patch, viewed from test.images where id = ' . $id );
	$image = mysqli_fetch_assoc( $result );

	if ( $image ) {
		$result = mysqli_query( $link, 'update test.images set viewed = viewed + 1 where id = ' . $id );
	}
}

?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Заголовок страницы</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
	if ($image) {
		echo "<img src=\"$image[image_patch]\">";
		echo "<br>";
		echo "Просмотров: " . ( $image[viewed] + 1 );
	}
?>

<article>
 Контент - основное содержимое страницы.<br><br>
</article>

<br>

<footer><?= date('Y') ?></footer>

</body>
</html>
	
