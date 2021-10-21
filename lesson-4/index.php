<?php

	function get_upload_file()
	{
		if ( !isset( $_FILES['userfile'] ) )
			return [ null, null ];

		$uploaddir = '/var/www/html/lesson-4/uploads/';
		$uploadfile = $uploaddir . basename( $_FILES['userfile']['name'] );

		if ( $_FILES['userfile']['error'] !== UPLOAD_ERR_OK ) {
			$upload_error = 'Ошибка загрузки файла';
		} elseif ( $_FILES['userfile']['size'] == 0 || $_FILES['userfile']['size'] > 1_000_000 ) {
			# тут не делю на отдельные сообщения, для урока, надеюсь, достаточно)
			var_dump($_FILES['userfile']['size']);
			$upload_error = 'Попытка загрузить пустой файл или превышен максималный размер файла';
		} elseif ( $_FILES['userfile']['type'] != 'image/jpeg' ) {
			$upload_error = 'Неверный тип файла, поддерживается только "image/jpeg"';
		} elseif ( !is_uploaded_file( $_FILES['userfile']['tmp_name'] ) ) {
			$upload_error = "Возможная атака с участием загрузки файла: ";
			$upload_error .= "файл '". $_FILES['userfile']['tmp_name'] . "'.";
		} elseif ( move_uploaded_file( $_FILES['userfile']['tmp_name'], $uploadfile ) ) {
			$upload_message = "Файл корректен и был успешно загружен.";
		} else {
			$upload_message = "Возможная атака с помощью файловой загрузки!";
		}

		return [ $upload_error ?? null, $upload_message ];
	}

	[ $upload_error, $upload_message ] = get_upload_file();
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
  if ( $upload_error ) {
    echo "<b>$upload_error</b>";
  }

  if ( $upload_message ) {
    echo "<b>$upload_message</b>";
  }
?>

<article>
 Контент - основное содержимое страницы.<br><br>

 <a href="/lesson-4/images/1556777145_1.jpg" target="_blank">
  <img src="/lesson-4/images/1556777145_1.jpg" width="200">
 </a><br>

 <a href="/lesson-4/images/1611131113_2.jpg" target="_blank">
  <img src="/lesson-4/images/1611131113_2.jpg" width="200">
 </a><br>

 <a href="/lesson-4/images/1611131113_3.jpg" target="_blank">
  <img src="/lesson-4/images/1611131113_3.jpg" width="200">
 </a>
</article>

<br>

<form action="/lesson-4/index.php" enctype="multipart/form-data" method="POST">
  Отправить это изображение: <input name="userfile" type="file" />
  <input type="submit" value="Отправить" />
</form>

<br><br>

<footer><?= date('Y') ?></footer>

</body>
</html>
