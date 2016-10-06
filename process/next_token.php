<?php
session_start();
include('../include/connect.php');
$desk = $_GET['desk'];
$ename = $_SESSION['username'];
$done_token = $_GET['token_no'];
echo $desk;
echo $ename;
echo $done_token;
$date = date("Y-m-d h:i:sa");

$sql="UPDATE tokens SET done_ts = '".$date."', desk_no = '".$desk."', emp = '".$ename."', status = 2  WHERE  token_no='".$done_token."'";
$sql1 = mysql_query($sql);
if (!$sql1) {
  echo mysql_error();
}
$q1= "SELECT * FROM tokens WHERE status = 0 LIMIT 1";
$cc1 = mysql_query($q1);
while($arr1 = mysql_fetch_array($cc1))
{
    $tkn_no = $arr1['token_no'];
    $name = $arr1['name'];
  //echo $tkn_no." ". $name."<br>";
}

$sql="UPDATE tokens SET status = 1, desk_no= '".$desk."'  WHERE  token_no='".$tkn_no."'";
$sql1 = mysql_query($sql);
if (!$sql1) {
  echo mysql_error();
}

echo "done";
header('location: ../desk_view.php');


?>
