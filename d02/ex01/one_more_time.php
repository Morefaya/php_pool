#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		date_default_timezone_set("Europe/Paris");
		$cond = 0;
		$day = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
		$month = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
		if (preg_match("/^([A-Z]?[a-z]+) ([0-9]{1,2}) ([A-Z]?[a-z]+) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/", $argv[1], $date))
		{
			$tmp_1 = lcfirst($date[1]);
			$tmp_2 = lcfirst($date[3]);
			if (($day = array_search($tmp_1, $day)) && ($month = array_search($tmp_2, $month)) && (int)$date[4] >= 1970)
			{
				if (($time = mktime($date[5], $date[6], $date[7], $month + 1, $date[2], $date[4])))
				{
					$cond = 1;
					echo $time."\n";
				}
			}
		}
		if (!$cond)
			echo "Wrong format\n";
	}
?>