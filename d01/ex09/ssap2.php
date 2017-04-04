#!/usr/bin/php
<?php
	function sortchar($str1, $str2)
	{
		if ($str1 === $str2)
 			return (0);
 		else if (ctype_alpha($str1))
 		{
 			if (ctype_alpha($str2))
 				return (strcmp($str1, $str2));
 			else
 				return (-1);
 		}
 		elseif (ctype_alpha($str2))
 		{
 			if (ctype_alpha($str1))
 				return (strcmp($str1, $str2));
 			else
 				return (1);
 		}
 		elseif (ctype_digit($str1))
 		{
 			if (ctype_digit($str2))
 				return (strcmp($str1, $str2));
 			else
 				return (-1);
 		}
 		elseif (ctype_digit($str2))
 		{
 			if (ctype_digit($str1))
 				return (strcmp($str1, $str2));
 			else
 				return (1);
 		}
 		return (strcmp($str1, $str2));
 	}

	function ft_sort($str1, $str2)
	{
		$str1 = strtolower($str1);
		$str2 = strtolower($str2);
		if ($str1 == $str2)
			return 0;
		$len1 = strlen($str1);
		$len2 = strlen($str2);
		$len = max($len1, $len2);
		for ($i = 0; $i < $len; $i++)
		{
			$ret = sortchar($str1[$i], $str2[$i]);
			if ($ret)
				return $ret;
		}
		return 0;
	}
	if (count($argv) > 1)
	{
		array_shift($argv);
		$tab = explode(" ", implode(" ", $argv));
		usort($tab, "ft_sort");
		foreach ($tab as $value)
			echo $value."\n";
	}
?>