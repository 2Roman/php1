<?php

$result;
$operation;

$op1 = isset( $_POST['op1'] ) ? $_POST['op1'] : null;
$op2 = isset( $_POST['op2'] ) ? $_POST['op2'] : null;

if ( isset( $_POST['operation'] )
	&& isset( $op1, $op2 )
	&& is_numeric( $op1 )
	&& is_numeric( $op2 )
)
{
	switch ( $_POST['operation'] ) {
		case 'div':
			if ( $op2 == 0 ) {
				$result = 'ошибка: деление на 0';
			}
			else {
				$result = $op1 / $op2;
			}
			$operation = 'деление';
			break;
		case 'mul':
			$result = $op1 * $op2;
			$operation = 'умножение';
			break;
		case 'sub':
			$result = $op1 - $op2;
			$operation = 'вычитание';
			break;
		case 'add':
			$result = $op1 + $op2;
			$operation = 'сложение';
			break;
	}
}
else
{
	if ( isset( $_POST['operation'] ) ) {
		if ( !$op1 || !$op2 ) {
			$result = 'ошибка: не задан/ы операнды';
		}
		else {
			if ( !is_numeric( $op1 ) || !is_numeric( $op2 ) ) {
				$result = 'ошибка: операнды не числовые';
			}
		}
	}
}

?>


<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Форма-калькулятор</title>
</head>
<body>

<article>
 Форма-калькулятор: сложение, вычитание, умножение, деление.<br><br>

<?php
	if ( isset( $result ) ) {
		if ( isset( $operation ) ) {
			echo "Операция: " . $operation . '<br>';
			echo "операнды: $op1 и $op2<br>";
		}
		echo "результат: $result<br><br>";
	}
?>

<form action="/lesson-6/index-01.php" method="POST">
	<input type="text" name="op1"><br>
	<input type="text" name="op2"><br>
	<select name="operation">
		<option selected disabled>Выберите операцию</option>
		<option value="mul">умножение</option>
		<option value="div">деление</option>
		<option value="add">сложение</option>
		<option value="sub">вычитание</option>
	</select>
	<input type="submit" value="Отправить" />
</form>

</article>

<br>

<footer><?= date('Y') ?></footer>

</body>
</html>
