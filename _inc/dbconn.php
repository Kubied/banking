<?php
$serverName="eu-cdbr-west-03.cleardb.net";
$dbusername="b3c09316299ed3";
$dbpassword="d8615c54";
$dbname="heroku_593953e5dc152a6";
mysql_connect($serverName,$dbusername,$dbpassword)/* or die('the website is down for maintainance')*/;
mysql_select_db($dbname) or die(mysql_error());
?>
