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

<?php for($i = 1; $i<=4 ; $i++){
  $q1= "SELECT * FROM tokens WHERE status = 1 AND desk_no = '".$i."' LIMIT 1";
  $cc1 = mysql_query($q1);
  if (!$cc1) {
    echo mysql_error();
   }
   if (mysql_num_rows($cc1) == 0) {
     $tkn_no = 'EMPTY';
     $name = '';
   }
  while($arr1 = mysql_fetch_array($cc1))
  {
      $tkn_no = $arr1['token_no'];
      $name = $arr1['name'];
    //echo $tkn_no." ". $name."<br>";
  }


  ?>
  <meta http-equiv="refresh" content="15">
 <div style= "margin-top:50px;" class="container-fluid col-lg-4 col-lg-offset-1">
 <div class="panel panel-primary">
 <div class="panel-heading" style="background-color:#827717"><h3 style = "text-align:center;" class="panel-title">Desk <?= $i ; ?></h3></div>
 <div class="panel-body" style="padding:0;">
   <h2 style = "text-align:center;font-size:60px;margin-top:10px;margin-bottom:0px;"> <?= $tkn_no; ?> <br>
 </h2>
 <h5 style = "text-align:center;font-size:60px;margin-top:10px;margin-bottom:0px;"> <?= $name; ?>
 </h5>
 </div>
 </div>
 </div>
 <?php
}
?>
 <?php include('include/footer.php');
  ?>
