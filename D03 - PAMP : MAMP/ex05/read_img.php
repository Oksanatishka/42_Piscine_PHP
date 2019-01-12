<?php
    // curl --head http://localhost:8888/day_03/ex05/read_img.php
    header("Content-Type: image/png");
    readfile("../img/42.png");
?>