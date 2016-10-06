<?php
include "../include/connect.php";

$cnm = mysql_real_escape_string($_POST['cname']);
echo $cnm;

$countq= "SELECT token_no FROM tokens ORDER BY token_no DESC limit 1";
$cc = mysql_query($countq);

if(!$cc)
{
    echo "haaa";
}
$x=0;
while($arr = mysql_fetch_array($cc))
{
    $manas = $arr['token_no'];
    //echo "hello <br>";
}
//echo $manas;
$count = substr($manas, 3);
//echo "coubt ".$count;
$no1= sprintf("%03d", $count+1);

$id = "CUS". $no1;
echo $id;
$date = date("Y-m-d h:i:sa");
echo $date;
$insert = "INSERT INTO `tokens`(`token_no`, `name`, `taken_ts`) VALUES ('".$id."','".$cnm."','".$date."')";
$qry = mysql_query($insert);
if (!$qry) {
  echo mysql_error();
}

header("Location: ../generated_token.php?id=$id");    

?>
