#!/usr/bin/php
<?php
	if ($argc > 2)
	{
		array_shift($argv);
		$search = array_shift($argv);
		$ret = NULL;
		foreach ($argv as $key => $value)
		{
			$tab = explode(":", $value);
			if ($search == $tab[0])
				$ret = $tab[1];
		}
		if ($ret)
			echo $ret."\n";
	}
?>