#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		if (preg_match("/^([a-zA-Z0-9]*:\/\/)?([^\/]+)/", $argv[1], $url))
		{
			$curl = curl_init($url[0]);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$exe = curl_exec($curl);
			if (preg_match('/<img [^>]*src ?= ?"([^"]*)"[^>]*\/?>/', $exe, $pics))
			{
				if (!file_exists($url[2]))
					mkdir($url[2]);
				array_shift($pics);
				foreach ($pics as $arg)
				{
					if (preg_match("/\/([^\/]+)$/", $arg, $name))
						$file = $name[1];
					else
						$file = "image";
					$path = $url[2]."/".$file;
					if (preg_match("/^[a-zA-Z0-9]*\:\/\//", $arg))
						$url_pic = $arg;
					else if ($arg[0] == '/')
						$url_pic = $url[2].$arg;
					else
						$url_pic = $url[2].'/'.$arg;
					$curl = curl_init($url_pic);
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					$data = curl_exec($curl);
					file_put_contents($path, $data);
				}
			}
		}
	}
?>