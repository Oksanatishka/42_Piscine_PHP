#!/usr/bin/php
<?php
$myNumber=readline("Enter a number: ");
while ($myNumber !== false) {
    if(is_numeric($myNumber) == false) 
    echo "'$myNumber' is not a number\n";
    elseif ($myNumber%2 == 0)
    echo "The number $myNumber is even\n";
    else
    echo "The number $myNumber is odd\n";
    $myNumber=readline("Enter a number: ");
}
echo "\n";
?>