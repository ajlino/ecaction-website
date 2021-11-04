<?php
// Start the session
session_start();

$q = $_REQUEST["q"];
$_SESSION["room"] = $q;

echo $_SESSION["room"];


?>
