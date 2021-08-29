<?php

session_start();

$_SESSION['language'] = $_GET['lang'];
echo "<script>history.go(-1)</script>";