#!/usr/bin/php
<?PHP

if ($argc >= 3)
{
	$my_arr = array();
	array_splice($argv, 0, 1);
	$key = array_shift($argv);
	foreach($argv as $x => $ar) {
		if (preg_match('/\S+:\S+/', $ar))
		{
			$split = preg_split('/:/', $ar);
			if ($split[0] == $key)
				array_push($my_arr, $split[1]);
		}
	}
	if (count($my_arr) > 0)
		echo end($my_arr), "\n";
}

?>
