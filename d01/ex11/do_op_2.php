#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		if (preg_match("/^[ \t]*(-?[0-9]+)[ \t]*([\+\-\*\\\%])[ \t]*(-?[0-9]+)[ \t]*$/", $argv[1], $match))
		{
			$nb1 = (int)trim($match[1]);
			$nb2 = (int)trim($match[3]);
			$op = trim($match[2]);
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
			else
				echo "Syntax Error";
		}
		else
			echo "Syntax Error";
	}
	else
		echo "Incorrect Parameters";
	echo "\n";
?>