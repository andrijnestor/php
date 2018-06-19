#!/usr/bin/php
<?PHP

$ret_arr = array();

array_splice($argv, 0, 1);
foreach($argv as $x => $value) {
	$ret_arr = array_merge($ret_arr, array_filter(explode(" ", $value)));
}
sort($ret_arr);
foreach($ret_arr as $x => $value) {
	echo $value, "\n";
}

?>
