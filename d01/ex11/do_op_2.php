#!/usr/bin/php
<?PHP

if ($argc == 2)
{
	$line = preg_replace('/\s+/', '', $argv[1]);

	if (!preg_match('/^\d+(\+|-|\/|\*|%)\d+$/', $line))
		echo "Syntax Error\n";
	else
	{
		$num = preg_split('/(\+|-|\/|\*|%)/', $line);
		$operator = preg_replace('/\d+/', '', $line);
		if ($operator == "+")
			echo $num[0] + $num[1], "\n";
		else if ($operator == "-")
			echo $num[0] - $num[1], "\n";
		else if ($operator == "*")
			echo $num[0] * $num[1], "\n";
		else if ($operator == "/")
			echo $num[0] / $num[1], "\n";
		else if ($operator == "%")
			echo $num[0] % $num[1], "\n";
	}
}
else
	echo "Incorrect Parameters\n";

?>
