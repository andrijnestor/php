#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
	$sorted = $tab;
	sort($sorted);
	if ($tab == $sorted)
		return true;
	else
		return false;
}

?>
