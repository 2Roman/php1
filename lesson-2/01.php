<?php
	$a = 222;
	$b = -333;

	if ( $a > 0 && $b > 0 )
		echo $a-$b;
	else if ( $a < 0 && $b < 0 )
		echo $a * $b;
	else if ( ( $a < 0 && $b > 0 ) || ( $a > 0 && $b < 0 ) )
		echo $a + $b;

