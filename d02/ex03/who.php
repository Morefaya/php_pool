#!/usr/bin/php
<?php
	if (($fd = fopen("/var/run/utmpx", "r")) == false)
		exit;
	date_default_timezone_set("Europe/Paris");
	while ($line = fread($fd, 628))
	{
		echo $line."\n";
	}
	fclose($fd);
?>