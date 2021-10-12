<?php
	function add($a,$b)
	{
		return $a + $b;
	}

	function mul($a,$b)
	{
		return $a * $b;
	}

	function mod($a,$b)
	{
		return $a % $b;
	}

	function sub($a,$b)
	{
		return $a - $b;
	}

	echo join("\n", array( add(9,-3), mul(2,2), mod(9,3), sub(-9,-3) ) );
