<?php
// https://www.pontikis.net/blog/create-cookies-php-javascript
// setcookie — Send a cookie
// curl - transfer a URL    --> curl --help (to see list of flags)
// -b, --cookie STRING/FILE  Read cookies from STRING/FILE (H)
// -c, --cookie-jar FILE  Write cookies to FILE after operation (H)
// p.s. cookies will be added to cook.text file
 
// 1. curl -c cook.text 'http://localhost:8888/day_03/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
// 2. curl -b cook.text 'http://localhost:8888/day_03/ex03/cookie_crisp.php?action=get&name=plat'
// 3. curl -c cook.text 'http://localhost:8888/day_03/ex03/cookie_crisp.php?action=del&name=plat'

// Create cookies 
if ($_GET["action"] == "set") {
    if ($_GET["name"] && $_GET["value"])
        setcookie($_GET["name"], $_GET["value"], time() + 3600); // 60 sec per min * 60 min per hour = 1 hour
}
// Read cookies
else if ($_GET["action"] == "get") {
    if ($_GET["name"] && $_COOKIE[$_GET["name"]])
        echo $_COOKIE[$_GET["name"]]."\n";
}
// Delete cookies
// empty value and expiration one hour before
else if ($_GET["action"] == "del") {
    if ($_GET["name"])
        setcookie($_GET["name"], "", time() - 3600);
}
?>