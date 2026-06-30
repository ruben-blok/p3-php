<?php
session_start();
$_SESSION['user'] = "Cassandra";
echo $_SESSION['user'];
?>
