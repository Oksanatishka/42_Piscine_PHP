#!/usr/bin/php
<?php
// USE ./search_it\!.php to fix 'bash: !.php: event not found' error.
// unset() - destroys a given variable.
// isset() — Determine if a variable is set and is not NULL
// strstr() - searches for the first occurrence of a string inside another string.
// substr — Return part of a string

	$key = $argv[1];
	unset($argv[0]);
	unset($argv[1]);
	foreach ($argv as $elem)
		if (strstr($elem, $key . ":"))
			$value = substr($elem, strlen($key) + 1);
	if (isset($value))
		echo "$value\n";
?>