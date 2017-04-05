#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$tab = array_filter(explode(" ", $argv[1]));
		$first = array_shift($tab);
		array_push($tab, $first);
		$str = implode(" ", $tab);
		echo $str."\n";
	}
?>