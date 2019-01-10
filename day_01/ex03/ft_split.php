<?php
// $str = "Hello world. It's a beautiful day.";
// $str_in_arr = explode(" ",$str);
// sort($str_in_arr);
// print_r ($str_in_arr);

function ft_split($str) {
    $str_in_arr = explode(" ",$str);
    sort($str_in_arr);
    return $str_in_arr;
}
?>