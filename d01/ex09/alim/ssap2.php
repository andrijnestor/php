#!/usr/bin/php
<?php

function ft_cmp($a, $b) {
	$i = 0;
	while ($a[$i] || $b[$i]) {
		$x = ord($a[$i]);
		$y = ord($b[$i]);
		if ($x >= 65 && $x <= 90)
			$x += 32;
		if ($y >= 65 && $y <= 90)
			$y += 32;
		if ($x >= 97 && $x <= 122)
			$x -= 200;
		if ($x >= 48 && $x <= 57)
			$x -= 100;
		if ($y >= 97 && $y <= 122)
			$y -= 200;
		if ($y >= 48 && $y <= 57)
			$y -= 100;
		if ($x != $y)
			return ($x < $y) ? -1 : 1;
		$i++;
	}
	return 0;
}

$arr = array();

foreach ($argv as $param) {
	$tmp_arr = explode(' ', $param);
	$arr = array_merge($arr, $tmp_arr);
}
unset($param);
unset($tmp_arr);

array_shift($arr);
usort($arr, 'ft_cmp');

foreach ($arr as $elm) {
	if (empty($elm))
		array_shift($arr);
}
unset($elm);

foreach ($arr as $value)
	echo "$value\n";

?>
