#!/usr/bin/php
<?PHP

if ($argc == 2)
{
	$repl = preg_replace('/(?<=[^ ])[ ]+(?=[^ ])/', ' ', $argv[1]);
	echo $repl, "\n";
}

?>
