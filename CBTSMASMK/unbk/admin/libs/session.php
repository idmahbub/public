<?php
session_start();
if(!isset($_SESSION['login'])) {
	include("index.php");
}
else {
?>