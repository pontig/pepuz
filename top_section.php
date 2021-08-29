<?php
session_start();
if (!isset($_SESSION['language'])) $_SESSION['language'] = 'en';
$path = "lang/" . $_SESSION['language'];
?>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['language']; ?>">