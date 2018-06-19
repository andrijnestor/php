#!/usr/bin/php
<?PHP

if ($argc >= 2)
{
	$ret_arr = array_filter(explode(" ", $argv[1]));
	$last = array_shift($ret_arr);
	foreach($ret_arr as $x => $value) {
		echo $value, " ";
	}
	echo $last, "\n";
}

?>
