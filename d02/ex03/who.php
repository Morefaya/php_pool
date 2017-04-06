#!/usr/bin/php
<?php
	if (($fd = fopen("/var/run/utmpx", "r")) == false)
		exit;
	date_default_timezone_set("Europe/Paris");
	$user = array();
	$line = array();
	$time = array();
	$data = array();
	$i = 0;
	while ($buffer = fread($fd, 628))
	{
		$data = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $buffer);
		if ($data["type"] == 7)
		{
			$user[$i] = $data["user"];
			$line[$i] = $data["line"];
			$time[$i] = $data["time1"];
			$i++;
		}
	}
	for ($j = 0; $j < $i; $j++)
	{
		$date = date("M  j H:i", $time[$j]);
		echo $user[$j]."  ".$line[$j]."  ".$date."\n";
	}
	fclose($fd);
?>