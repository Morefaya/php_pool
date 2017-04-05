#!/usr/bin/php
<?php
while(true)
{
	echo("Entrez un nombre: ");
	$tmp = new SplFileObject("php://stdin");
	$nb = $tmp->current();
	if (strlen($nb) == 0)
	{
		echo "\n";
		break;
	}
	$nb = rtrim($nb, "\n");
	if (is_numeric($nb) == true)
	{
		$nb = intval($nb);
		if ($nb == PHP_INT_MAX)
		{
			echo "Too big number\n";
			continue;
		}
		else if ($nb == -1 * PHP_INT_MAX)
		{
			echo "Too small number\n";
			continue;
		}
		echo "Le chiffre ".$nb." est ";
		if ($nb % 2)
			echo "Impair";
		else
			echo "Pair";
	}
	else
		echo("'".$nb."' n'est pas un chiffre.");
	echo "\n";
}
?>