#!/usr/bin/php
<?php

function ft_split($text)
{
	$arr = array_filter(explode(" ", $text));
	sort($arr);
	return $arr;
}

?>
