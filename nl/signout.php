<?php

// Start the session
session_start();
$_SESSION["username"] = "";
$_SESSION["password"] = "";
$_SESSION["authenticated"] = false;
header("Location: index.php");
?>