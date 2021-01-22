<?php
$serverName="eu-cdbr-west-03.cleardb.net";
$dbusername="b3c09316299ed3";
$dbpassword="d8615c54";
$dbname="heroku_593953e5dc152a6";

$mysql = new mysqli($serverName,$dbusername,$dbpassword, $dbname);

if($mysql->connect_errno)
{
	echo "Failed to connect to MYSQL: ".$mysql->connect_error;
}
 $mysql->select_db($dbname);
?>
