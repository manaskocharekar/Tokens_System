<?php

session_start();
if(isset($_SESSION['logged'])){
session_destroy();
$msg = "You have been logged out. Wait for Homepage...";
header("refresh:0;url=../index.php");
}else{
	echo "Invalid URL!! &nbsp; Go to <a href=\"../index.php\">Homepage</a>";
}
?>
