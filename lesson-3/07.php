<?php

for ( $i = 0; $i < 10; p($i++) /* не захтел он здесь echo выполнять, пришлось через ф-ю */ )
{
	// здесь пусто
};

function p($i)
{
	echo implode( array( $i++, PHP_EOL ) );
}
