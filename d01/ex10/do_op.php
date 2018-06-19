#!/usr/bin/php
<?PHP

if ($argc == 4)
{
	$num1 = trim($argv[1], " \t");
	$num2 = trim($argv[3], " \t");
	$operator = trim($argv[2], " \t");
	if (!is_numeric($num1) || !is_numeric($num2) || !preg_match('/^(\+|-|\/|\*|%)$/', $operator))
		echo "Incorrect Parameters\n";
	else
	{
		if ($operator == "+")
			echo $num1 + $num2, "\n";
		else if ($operator == "-")
			echo $num1 - $num2, "\n";
		else if ($operator == "*")
			echo $num1 * $num2, "\n";
		else if ($operator == "/")
			echo $num1 / $num2, "\n";
		else if ($operator == "%")
			echo $num1 % $num2, "\n";
	}
}
else
	echo "Incorrect Parameters\n";

?>
