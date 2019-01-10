#!/usr/bin/php
<?php
// https://www.techfry.com/php-tutorial/how-to-remove-whitespace-characters-in-a-string-in-php-trim-function

// The special \s character in a regular expression is used to represent all whitespace characters.
// The + after \s means that you want to replace one or more whitespace characters with a single space.
// A whitespace character can be: space character, tab character, carriage return character, 
// new line character, vertical tab character, form feed character.

if ($argc == 2) {
    echo trim(preg_replace('/\s+/', ' ', $argv[1])) . "\n";
}
?>