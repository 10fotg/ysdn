<?php
session_start();

if(!isset($_SESSION['login'])) {
	header("location: /learnphp/ysdn/auth/login.php");
	exit;
}
?>