#!/usr/bin/php
<?php
// as usual: $ matches [0] represents the total value
// $ matches [1] is the first capturing parenthesis
// file_exists — Checks whether a file or directory exists
// feof — Tests for end-of-file on a file pointer

    // if ($argc < 2 || !file_exists($argv[1]))
	// 	exit();
	// $read = fopen($argv[1], 'r');
	$page = '<html><head><title>Nice page</title></head><body>Hello World <a href=http://cyan.com title="a link">This is a link</a><br /><a href=http://www.riven.com> And this too <img src=wrong.image title="And also this"></a></body></html>';
    // while ($read && !feof($read)) {
    //     $page .= fgets($read);
    // }

    
    // expression flags:
    // "m" (multiline)  
    // "i" ignore case (case insensitive)
    // "s" single line (dotall)
    // "g" global search
    // "u" unicode
    // "y" sticky
    
    // preg_replace_callback(arg1: regex, arg2: callback, arg3: строка которую распарсить)
    $page = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($matches) {
        echo "Result1: ".$matches[0]."\n";
        // Result1: <a href=http://cyan.com title="a link">This is a link</a><br /><a href=http://www.riven.com> And this too <img src=wrong.image title="And also this"></a>
        echo "Result2: ".$matches[1]."\n";  
        // Result2: <a
        echo "Result3: ".$matches[2]."\n";
        // Result3: href=http://cyan.com title="a link"
        echo "Result4: ".$matches[3]."\n";
        
        $matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($matches) {
            echo "Result5: ".var_dump($matches)."\n";
            return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
        }, $matches[0]);
        // Result6: <a href=http://cyan.com title="A LINK">This is a link</a><br /><a href=http://www.riven.com> And this too <img src=wrong.image title="AND ALSO THIS"></a>
        echo "Result6: ".$matches[0]."\n";
        
        $matches[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($matches) {
            return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
        }, $matches[0]);
        // Result7: <a href=http://cyan.com title="A LINK">THIS IS A LINK</a><br /><a href=http://www.riven.com> AND THIS TOO <img src=wrong.image title="AND ALSO THIS"></a>
        echo "Result7: ".$matches[0]."\n";
        return ($matches[0]);
    }, $page);
    echo $page;
?>
