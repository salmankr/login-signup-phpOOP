<?php
session_start();
include_once('../functions.php');
$retrieve = new signin;
$retrieve->query();
?>