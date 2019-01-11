#!/usr/bin/php
<?php
if ($argc < 2)
    exit();
echo trim(preg_replace("/[ \t\r]+/", " ", $argv[1]))."\n";

// Regex https://people.freebsd.org/~lofi/reference.html
// \r - The carriage return character. (ASCII 13)
// \t - The tab character. (ASCII 9)
// + after \s means that you want to replace one or more whitespace characters with a single space.
?>