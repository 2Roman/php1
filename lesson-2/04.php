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

	function mathOperation($arg1, $arg2, $operation)
	{
		switch ($operation) {
			case 'add':
				return add($arg1,$arg2);
				break;
			case 'mul':
				return mul($arg1,$arg2);
				break;
			case 'mod':
				return mod($arg1,$arg2);
				break;
			case 'sub':
				return sub($arg1,$arg2);
				break;
			
			default:
				echo "Недопустимая операция";
				break;
		}
	}

	echo mathOperation(5,7, 'add') . "\n";
	echo mathOperation(5,5, 'mul') . "\n";
	echo mathOperation(7,5, 'mod') . "\n";
	echo mathOperation(6,9, 'sub') . "\n";
	echo mathOperation(1,8, 'ala') . "\n";
