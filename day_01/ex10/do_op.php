#!/usr/bin/php
<?php
if ($argc == 4) {
    $num1 = trim($argv[1]);
	$operator = trim($argv[2]);
    $num2 = trim($argv[3]);

    if ($operator == "+")
    echo $num1 + $num2."\n";
    elseif ($operator == "-")
    echo $num1 - $num2."\n";
    elseif ($operator == "*")
    echo $num1 * $num2."\n";
    elseif ($operator == "/")
    echo $num1 / $num2."\n";
    elseif ($operator == "%")
    echo $num1 % $num2."\n";
} 
else
    echo "Incorrect Parameters\n";
?>