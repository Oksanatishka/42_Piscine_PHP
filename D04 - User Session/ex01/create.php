<?php
    // file_get_contents — Reads entire file into a string
    // file_put_contents — Write data to a file
    // serialize    — Generates a storable representation of a value
    // unserialize  — Creates a PHP value from a stored representation
    // file_exists — Checks whether a file or directory exists
    // mkdir — Makes directory
    // hash — Generate a hash value (message digest)
    // $_POST — HTTP POST variables

    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK") {
        if (!file_exists('../private')) {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd')) {
            file_put_contents('../private/passwd', null);
        }
        $account = unserialize(file_get_contents('../private/passwd'));
        if ($account) {
            $exist = 0;
            foreach ($account as $k => $v) {
                if ($v['login'] === $_POST['login'])
                    $exist = 1;
            }
        }
        if ($exist) {
            echo "ERROR\n";
        } else {
            $tmp['login'] = $_POST['login'];
            $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
            $account[] = $tmp;
            file_put_contents('../private/passwd', serialize($account));
            echo "OK\n";
        }
    } else {
        echo "ERROR\n";
    }
?>
