<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "vote";

$mysqli = new mysqli($host, $username, $password, $dbname);
$mysqli->set_charset("utf8");

if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}
