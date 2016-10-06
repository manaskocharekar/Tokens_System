<?php include('include/header.php');
 ?>
 <?php
 if(!isset($_SESSION['logged']))
 {
   //unset($_SESSION['logged']);
 echo "here";
  header('location: index.php');
 }
?>
<?php
$q1= "SELECT * FROM tokens WHERE status = 0";
$cc1 = mysql_query($q1);
$waiting = mysql_num_rows($cc1);

$date = date("Y-m-d");
$date = $date."%";
$q2= "SELECT * FROM tokens WHERE taken_ts like '".$date."'";
$cc2 = mysql_query($q2);
if(!$cc2){
  echo mysql_error();
}
$today = mysql_num_rows($cc2);
$tot = 0;
$q3= "SELECT * FROM tokens WHERE status = 2";
$cc3 = mysql_query($q3);
if(!$cc3){
  echo mysql_error();
}
$allofthem = mysql_num_rows($cc3);
while($arr1 = mysql_fetch_array($cc3))
{
    $done = $arr1['done_ts'];
    $done = substr($done,10,9);
//    echo $done;
    $taken = $arr1['taken_ts'];
    $taken = substr($taken,10,9);
  //  echo $taken;
    $time1 = new DateTime($done);
$time2 = new DateTime($taken);
$interval = $time1->diff($time2);
$diff = $interval->format('%H%i%s');
//     echo $diff. "aa<br>";
   $tot = $tot + $diff;
  //echo $tkn_no." ". $name."<br>";
}
$avg = $tot/$allofthem;
$no1= sprintf("%06d", $avg);
$hh = substr($no1,0,2);
$mm = substr($no1,2,2);
$ss = substr($no1,4,2);
$waited = $hh." : ".$mm." : ".$ss." ";
 ?>
<h1 style="text-align:center; color:#ff5722;"> Admin Panel</h1>
 <div style= "margin-top:50px;" class="container-fluid col-lg-2 col-lg-offset-1">
 <div class="panel panel-primary">
 <div class="panel-heading" style="background-color:#e65100"><h3 style = "text-align:center;" class="panel-title">Waiting People </h3></div>
 <div class="panel-body" style="padding:0;">
   <h2 style = "text-align:center;font-size:60px;margin-top:10px;margin-bottom:0px;"> <?= $waiting; ?> <br>
 </h2>
 </div>
 </div>
 </div>

 <div style= "margin-top:50px;" class="container-fluid col-lg-2 col-lg-offset-1">
 <div class="panel panel-primary">
 <div class="panel-heading" style="background-color:#880e4f"><h3 style = "text-align:center;" class="panel-title">Today's Tokens <?= $i ; ?></h3></div>
 <div class="panel-body" style="padding:0;">
   <h2 style = "text-align:center;font-size:60px;margin-top:10px;margin-bottom:0px;"> <?= $today; ?> <br>
 </h2>
 </div>
 </div>
 </div>

 <div style= "margin-top:50px;" class="container-fluid col-lg-4 col-lg-offset-1">
 <div class="panel panel-primary">
 <div class="panel-heading" style="background-color:#311b92"><h3 style = "text-align:center;" class="panel-title">Average Waiting</h3></div>
 <div class="panel-body" style="padding:0;">
   <h2 style = "text-align:center;font-size:60px;margin-top:10px;margin-bottom:0px;"> <?= $waited; ?> <br>
 </h2>
 </div>
 </div>
 </div>


 <?php include('include/footer.php');
  ?>
