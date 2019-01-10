#!/usr/bin/php
<?php
// The explode() function breaks a string into an array.
// The implode() function returns a string from the elements of an array.
// preg_split — Split string by a regular expression
//      split — Split string into array by regular expression
// The count() function returns the number of elements in an array.

$myString = $argv[1];
$arr = preg_split('/[\s]+/', trim($myString));

$i = 1;
while ($i < count($arr))
{
        echo "$arr[$i] ";
        $i += 1;
}
echo $arr[0]."\n";
?>