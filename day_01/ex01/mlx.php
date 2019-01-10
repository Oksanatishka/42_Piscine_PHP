#!/usr/bin/php
<?PHP
// if x=0 there is empty line in the 1st row, so we take x=1
for ($x = 1; $x <= 1001; $x++) {
    if ($x%100 == 0)
    echo "\n";
    else
    echo "X";
} 
?>