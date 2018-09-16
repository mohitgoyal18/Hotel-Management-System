<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mobile';
@mysql_connect($host,$username,$password) or die ("could not connect to MySQL");
@mysql_select_db($dbname) or die ("No database");

?>
