<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "verified";

$con = new mysqli($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");
?>