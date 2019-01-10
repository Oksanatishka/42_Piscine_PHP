<?php
function ft_is_sort($arr) {
    $tmp = $arr;
    sort($arr);
    if ($arr == $tmp)
            return true;
    else
            return false;
}
?>