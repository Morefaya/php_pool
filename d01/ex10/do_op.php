#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$nb1 = (int)trim($argv[1]);
		$nb2 = (int)trim($argv[3]);
		$op = trim($argv[2]);
		if ($op == '+')
			echo ($nb1 + $nb2);
		else if ($op == '-')
			echo ($nb1 - $nb2);
		else if ($op == '*')
			echo ($nb1 * $nb2);
		else if ($op == '/')
			echo ($nb1 / $nb2);
		else if ($op == '%')
			echo ($nb1 % $nb2);
	}
	else
		echo "Incorrect Parameters";
	echo "\n";
?>