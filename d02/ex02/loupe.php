#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$file = file_get_contents($argv[1]);
		$ret = preg_replace_callback("/<a href=.+>(.+)<\/a>/", function ($match){return preg_replace("/$match[1]/", strtoupper($match[1]), $match[0]);}, $file);
		$ret = preg_replace_callback("/<a href=.+>((.*)(<.*>)(.*))<\/a>/", function ($match){return preg_replace("/$match[3]/", strtolower($match[3]), $match[0]);}, $ret);
		$ret = preg_replace_callback("/<a href=.+>((.*)(<.+ title=\"(.+)\")(.*))<\/a>/", function ($match){return preg_replace("/$match[4]/", strtoupper($match[4]), $match[0]);}, $ret);
		echo $ret;
	}
?>