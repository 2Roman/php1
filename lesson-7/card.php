<?php

session_start();

$goods = [
    1 => 'HD Телевизор Xiaomi Mi TV 4A (L32M5-5ARU) 32"',
    2 => 'Комплект Cam-модуль НТВ Плюс CI+ с картой и договором (Запад)',
    3 => 'Брюки Sela',
    4 => 'Шарф Sela',
];

if ( isset( $_GET['remove_all'] )
    && isset( $_SESSION['good'] )
    && is_array( $_SESSION['good']['product'] )
    && count( $_SESSION['good']['product'] )
    )
{
    unset( $_SESSION['good'] );
    echo "<h1>Корзина очищена</h1>";
}

if ( isset( $_SESSION['good'] ) )
{
    echo "<h1>Товары</h1>";

    foreach ( $_SESSION['good']['product'] as $product_id ) {
        echo "<div>{$goods[$product_id]}</div>";
    }
}
else
{
	echo "Корзина пуста, но всё можно изменить...";// или ещё что-нибудь... Но это уже совсем другая история...
}

echo "<a href='javascript:window.history.go(-1)'>Назад</a><br>";

echo "<a href='/lesson-7/card.php?remove_all=1'>Очистить корзину</a>";

