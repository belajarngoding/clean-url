<?php

$db_host			= 'localhost';
$db_user 			= 'root';
$db_pass 			= 'root';
$db_name 			= 'blog';

$base_url			= 'http://localhost/cwicaksono/belajarngoding/clean-url/';

mysql_connect($db_host, $db_user, $db_pass) or die ("Error connecting to database server.<br>reason:".mysql_error());
mysql_select_db($db_name) or die ("Database \"" . $db_name . "\" not found!");

?>