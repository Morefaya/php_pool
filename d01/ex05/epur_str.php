#!/usr/bin/php
<?php
function epurstr($str)
{
	$tmp = preg_replace("/\s\s+/", " ", $str);
	return (trim($tmp));
}

if (isset($argv[0]) && isset($argv[1]))
	echo (epurstr($argv[1]));
echo("\n");
?>