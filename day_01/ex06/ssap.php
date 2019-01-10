#!/usr/bin/php
<?php
// .=	Concatenation assignment, e.g. $txt1 .= $txt2, result: Appends $txt2 to $txt1
// split(":", "this:is:a:string");
// preg_split('/www/', 'D:/Projects/job.com/www/www/path/source', 2);
// explode('www', 'D:/Projects/job.com/www/www/path/source', 2);
$myString = "";
foreach ($argv as $elem)
{
    if ($elem != $argv[0])
        $myString .= " $elem ";
}
$arr = preg_split('/[\s]+/', trim($myString));
sort($arr);
foreach($arr as $word)
    echo $word."\n";

?>