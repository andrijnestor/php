#!/usr/bin/php
<?PHP

array_splice($argv, 0, 1);
foreach($argv as $x => $value) {
	echo $value, "\n";
}

?>
