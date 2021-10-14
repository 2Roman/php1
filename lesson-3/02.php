<?php

$i = 0;

do {
	if ( $i == 0 ) {
		echo "$i - ноль.\n";
		continue;
	}
	$odd_str = $i % 2 ? 'нечетное' : 'четное';
	echo "$i - $odd_str число.\n";
} while ( $i++ < 10 );
