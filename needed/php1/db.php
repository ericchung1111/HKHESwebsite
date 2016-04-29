<?php

error_reporting(E_ALL^E_NOTICE);
session_start();

$link = mysqli_connect("localhost", "root", "", "php1");

if (!$link) {
	die('failed to connect the database');
}

if (!empty($_SESSION['userid'])) {
	$userInfo = array();
	$sql = "select * from user where id='$_SESSION[userid]'";
	$result1 = mysqli_query($link,$sql);
	if ($row = mysqli_fetch_array($result1)) {
		$userInfo = $row;
	}
}

?>