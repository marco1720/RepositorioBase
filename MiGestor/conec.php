<?php

$mysqli = new mysqli('localhost','root','','login');
$mysqli->query("SET NAMES 'UTF-8'");
	if ($mysqli->connect_error){
		die('ERROR DE (' . $mysqli->connect_error . ') '
			. $mysqli->connect_error);
	}
?>