#!/usr/bin/php
<?php
function splitting($str)
{
	$tmp = explode(" ", $str);
	sort($tmp, SORT_STRING);
	return ($tmp);
}

if ($argc > 1)
{
	array_shift($argv);
	$str = implode(" ", $argv);
	$tab = splitting($str);
	foreach ($tab as $arg)
		echo $arg."\n";
}
?>