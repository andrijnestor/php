#!/usr/bin/php
<?PHP

function	cmp($a, $b) {
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

$ret_arr = array();

array_splice($argv, 0, 1);
foreach($argv as $n => $value) {
	$ret_arr = array_merge($ret_arr, array_filter(explode(" ", $value)));
}

usort($ret_arr, "cmp");

foreach($ret_arr as $n => $value) {
	echo $value, "\n";
}

?>
