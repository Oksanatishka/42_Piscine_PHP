#!/usr/bin/php
<?PHP
include("ft_is_sort.php");
// $tab = array("Hello World", "hi", "zZzZzZz");
$tab = array("a", "b", "c");
// $tab[] = "What are we doing now ?";
if (ft_is_sort($tab))
echo "The array is sorted\n";
else
echo "The array is not sorted\n";
?>