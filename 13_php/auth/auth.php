<?php
session_start();

if(!isset($_SESSION['login'])) {
	header("location: /learnphp/13_php/auth/login.php");
	exit;
}
?>