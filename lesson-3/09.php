<?php

$new_str = translit_w_repl( 'в в валвыалвыло арвыаячсмитьбюйц укенгшщзз зззхъ фывапр ол д жэ' );

echo $new_str;

function my_str_replace($str)
{
	return str_replace(' ', '_', $str);
}

function translit_w_repl( $str )
{
	$aaa = [ 'A' => 'A',
		 'Б' => 'B',
		 'В' => 'V',
		 'Г' => 'G',
		 'Д' => 'D',
		 'Е' => 'Е',
		 'Ё' => 'YO',
		 'Ж' => 'ZH',
		 'З' => 'Z',
		 'И' => 'I',
		 'Й' => 'Y',
		 'К' => 'K',
		 'Л' => 'L',
		 'М' => 'M',
		 'Н' => 'N',
		 'О' => 'O',
		 'П' => 'P',
		 'Р' => 'R',
		 'C' => 'S',
		 'T' => 'T',
		 'У' => 'U',
		 'Ф' => 'F',
		 'X' => 'KH',
		 'Ц' => 'TS',
		 'Ч' => 'CH',
		 'Ш' => 'SH',
		 'Щ' => 'SCH',
		 'Ъ' => '-',
		 'Ы' => 'Y',
		 'Ь' => '-',
		 'Э' => 'E',
		 'Ю' => 'YU',
		 'Я' => 'YA',
		 'a' => 'a',
		 'б' => 'b',
		 'в' => 'v',
		 'г' => 'g',
		 'д' => 'd',
		 'е' => 'е',
		 'ё' => 'yo',
		 'ж' => 'zh',
		 'з' => 'z',
		 'и' => 'i',
		 'й' => 'y',
		 'к' => 'k',
		 'л' => 'l',
		 'м' => 'm',
		 'н' => 'n',
		 'о' => 'o',
		 'п' => 'p',
		 'р' => 'r',
		 'c' => 's',
		 't' => 't',
		 'у' => 'u',
		 'ф' => 'f',
		 'x' => 'kh',
		 'ц' => 'ts',
		 'ч' => 'ch',
		 'ш' => 'sh',
		 'щ' => 'sch',
		 'ъ' => '-',
		 'ы' => 'y',
		 'ь' => '-',
		 'э' => 'e',
		 'ю' => 'yu',
		 'я' => 'ya' ];

	$ar = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);

	foreach ($ar as &$value) {
		if ( isset($aaa[ $value ]) )
			$value = $aaa[ $value ];
	}

	return my_str_replace( implode($ar) );
}
