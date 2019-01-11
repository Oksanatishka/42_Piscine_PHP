#!/usr/bin/php
<?php
// as usual: $ matches [0] represents the total value
// $ matches [1] is the first capturing parenthesis
// file_exists — Checks whether a file or directory exists
// feof — Tests for end-of-file on a file pointer

    if ($argc < 2 || !file_exists($argv[1]))
		exit();
	$read = fopen($argv[1], 'r');
	$page = "";
    while ($read && !feof($read)) {
        $page .= fgets($read);
    }
    // expression flags:
    // "m" (multiline)  
    // "i" ignore case (case insensitive)
    // "s" single line (dotall)
    // "g" global search
    // "u" unicode
    // "y" sticky
    
    $page = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($matches) {
        $matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($matches) {
            return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
        }, $matches[0]);
        $matches[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($matches) {
            return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
        }, $matches[0]);
        return ($matches[0]);
    }, $page);
    echo $page;
?>