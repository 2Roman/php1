<?php
	$s = 'd fldjflds jfld jfld jfdsjfdkdjfldkfd    dkfdf';

	$sn = str_replace(' ', '_', $s);

	echo $sn . "\n";

# зачем писать функцию когда она уже есть?
# ну можно и так:
	function my_str_replace($str)
	{
		return str_replace(' ', '_', $str);
	}

	echo my_str_replace(' ddff   dfsdjf jd f f d h');
