#!/usr/bin/php
<?PHP

var_dump($argv);
/*
function	cmp($a, $b)
{
	$len = strlen($a);
	$len2 = strlen($b);

	for ($i = 0; $i != $len, $i != $len2; $i++)
	{
		if (ctype_alnum($a[$i]) && !ctype_alnum($b[$i]))
		{
			if (!is_numeric($a[$i]) && is_numeric($b[$i]))
				return 1;
			else
			{
				if ($a[$i] < $b[$i])
					return -1;
			}
			return 1;
		}
//		if ($a[$i] < $b[$i])
//			return -1;
//		else if ($a[$i] > $b[$i])
//			return 1;
	}
	if ($len < $len2)
		return -1;
	else if ($len > $len2)
		return 1;
	return 0;

	if ($a == $b) {
		return 0;
	}
	return ($a < $b) ? -1 : 1;
 
}
 */
//var_dump($argv);

//$ret_arr = array();

//array_splice($argv, 0, 1);
//foreach($argv as $x => $value) {
//	$ret_arr = array_merge($ret_arr, array_filter(explode(" ", $value)));
//}

//usort($ret_arr, "cmp");
//sort($ret_arr);
//foreach($argv as $x => $value) {
//	echo $value, "\n";
//}
print_r($argv);

?>
