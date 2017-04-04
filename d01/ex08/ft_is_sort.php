<?php
	function ft_is_sort($tab)
	{
		$prev = array_shift($tab);
		foreach ($tab as $value)
		{
			if (strcmp($prev, $value) > 0)
				return (false);
			$prev = $value;
		}
		return (true);
	}
?>