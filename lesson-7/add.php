<?php

session_start();

if ( isset( $_GET['product_id'] ) && is_integer( intval( $_GET['product_id'] ) ) )
{
	if ( in_array( $_GET['product_id'], $_SESSION['good']['product'] ) ) {
		echo "товар уже в корзине";
	} else {
		$_SESSION['good']['product'][$_GET['product_id']] = $_GET['product_id'];
		echo "Товар добавлен";
	}
}
else
{
	echo "Товар не найден или не определён";// или ещё что-нибудь... Но это уже совсем другая история...
}

// echo "<script>
//              window.history.go(-1);
//      </script>";

# можно и так...
# header("Location: lesson-7/index.php");

// но так лучше всего
echo '<meta http-equiv="refresh" content="2; url=/lesson-7/index.php" />';
