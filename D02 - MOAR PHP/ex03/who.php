#!/usr/bin/php
<?php
// man who -- display who is logged in
// SYNOPSIS
//      who [-abdHlmpqrsTtu] [file]
//      who am i
// By default, who gathers information from the file /var/run/utmpx

$fd = fopen("/var/run/utmpx", 'r');
    date_default_timezone_set("America/Los_Angeles");
    // Hexadecimal: 0x274 converts to Decimal: 628
	while ($str = fread($fd, 0x274)) {
		$src = unpack("a256user/a4id/a32line/ipid/itype/Itime", $str);
		if ($src[type] == 7) {
			echo substr($src['user'], 0, strpos($src['user'], 0x0)) . '  ';
			echo substr($src['line'], 0, strpos($src['line'], 0x0)) . '  ';
			echo date("M j H:i", $src[time]) . ' ' . PHP_EOL;
		}
	}
?>