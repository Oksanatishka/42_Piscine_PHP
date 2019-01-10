#!/usr/bin/php
<?php
if ($argc == 2) {
    // remove whitespaces
    $calculated = str_replace(" ", "", $argv[1]);

    // The intval() function is used to get the integer value of a variable.
    // The substr() function returns a part of a string. Syntax: substr(string,start,length)
    // The strlen() function returns the length of a string.

    $num1 = intval($calculated);
    // substr(substr("42+2", 2), 0, 1); --> +
    $operator = substr(substr($calculated, strlen((string)$num1)), 0, 1);
    // substr(substr("42+2", 2), 1); --> 2
    $num2 = substr(substr($calculated, strlen((string)$num1)), 1);

    if (!is_numeric($num1) || !is_numeric($num2)){
        echo "Syntax Error\n";
        exit();
    }

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