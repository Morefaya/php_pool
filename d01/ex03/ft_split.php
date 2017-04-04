<?php
function ft_split($str)
{
	if (is_string($str))
	{
		$tmp = explode(" ", $str);
		sort($tmp, SORT_STRING);
		return $tmp;
	}
	else
		return false;
}
?>