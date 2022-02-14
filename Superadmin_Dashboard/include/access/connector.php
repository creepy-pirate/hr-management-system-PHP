<?php

/*====Created by:juniltoledo */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'hrinformationsystem_db');

$phdb = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$phdb){
	die("Connection error: " . mysqli_connect_error());	
}
?>