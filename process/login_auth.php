<?php

include "../include/connect.php";

$username=mysql_real_escape_string($_POST['uname']);
$password=mysql_real_escape_string($_POST['pass']);
echo $username.$password;
unset($_SESSION['desk']);
unset($_SESSION['logged']);
if($password == "desk1")
	{
	$_SESSION['desk'] = 1;
	}
elseif ($password == "desk2")
	{
		$_SESSION['desk'] = 2;
	}
elseif ($password == "desk3")
	{
			$_SESSION['desk'] = 3;
	}
elseif ($password == "desk4")
	{
				$_SESSION['desk'] = 4;
	}


if(!isset($_SESSION['desk'])) {
	//echo "here";
		header('location: ../index.php');
	}
	else {


	echo $_SESSION['desk'];


$sql="SELECT * FROM users WHERE  name='".$username."'";
if(!$sql){
	die("Database Query Failed ".mysql_error());
}
$result=mysql_query($sql);
while($row = mysql_fetch_array($result)){
	$id = $row['uid'];
	$uname = $row['name'];
}
$count=mysql_num_rows($result);
if($count==0){
	echo "<h3>You are NOT a Registered User!!</h3>";
	header("location:../index.php");
}else  if($count==1){
	session_start();
	$_SESSION['username']= $uname;
	echo	$uname.$_SESSION['username'];
	$_SESSION['id']= $id;
	$_SESSION['logged'] = 1;
echo "login succes";
header('location: ../desk_view.php');
}
}
?>
