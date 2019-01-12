<?php
    // curl 'http://localhost:8888/day_03/ex02/print_get.php?login=mmontinet'
    // curl 'http://localhost:8888/day_03/ex02/print_get.php?gdb=pied2biche&barry=barreamine'
    // $_GET — HTTP GET variables
    foreach ($_GET as $key => $value)
        echo $key.": ".$value."\n";
?>