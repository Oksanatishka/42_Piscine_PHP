#!/usr/bin/php
<?php
if ($argc < 2) 
    exit();
else {
    $myString = "";
    foreach ($argv as $elem)
    {
        if ($elem != $argv[0])
            $myString .= " $elem ";
    }
    $arr = preg_split('/[\s]+/', trim($myString));

    // echo "Result1: ".$arr[0]."\n";
    // echo "Result1: ".$arr[1]."\n";
    // echo "Result1: ".$arr[2]."\n";
    // echo "Result1: ".$arr[3]."\n";
    // echo "Result1: ".$arr[4]."\n";
    // echo "Result1: ".$arr[5]."\n";
    // echo "Result1: ".$arr[6]."\n";
    // echo "Result1: ".$arr[7]."\n";
    // echo "Result1: ".$arr[8]."\n";
    // The natcasesort() function sorts an array by using a "natural order" algorithm.
    // In a natural algorithm, the number 2 is less than the number 10. 
    // In computer sorting, 10 is less than 2.
    // This function is case-insensitive.
    // This function returns TRUE on success, or FALSE on failure.

    // sort($arr);  // in previous exercise
    // foreach($arr as $word)
    //     echo $word."\n";

    natcasesort($arr);

    foreach($arr as $word) {
        if (ctype_alpha($word[0]))
            echo $word."\n";
    }     
    // sort(array,sortingtype);
    // sortingtype	Optional. Specifies how to compare the array elements/items. Possible values:
    //     0 = SORT_REGULAR - Default. Compare items normally (don't change types)
    //     1 = SORT_NUMERIC - Compare items numerically
    //     2 = SORT_STRING - Compare items as strings
    //     3 = SORT_LOCALE_STRING - Compare items as strings, based on current locale
    //     4 = SORT_NATURAL - Compare items as strings using natural ordering
    //     5 = SORT_FLAG_CASE -  

    sort($arr, SORT_STRING);
    // ctype_digit — Check for numeric character(s)
    foreach($arr as $word) {
        if (ctype_digit($word[0]))
            echo $word."\n";
    }
    foreach($arr as $word) {
        if (!ctype_alpha($word[0]) && !ctype_digit($word[0]))
            echo $word."\n";
    }
}
?>
