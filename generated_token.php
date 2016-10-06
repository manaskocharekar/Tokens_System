<?php include('include/header.php');
 ?>
 <?php
$newtoken = $_GET['id'];
?>
<div style= "margin-top:50px;" class="container-fluid col-lg-5 col-lg-offset-3">
<div class="panel panel-primary">
<div class="panel-heading" style="background-color:#827717"><h3 style = "text-align:center;" class="panel-title">Token Generated</h3></div>
<div class="panel-body">
  <h2 style = "text-align:center;"> <?= $newtoken; ?> <br> <br>
    <a href="new_token.php"> Next Token &nbsp <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> </a>

</h2>


</div>
</div>

</div>


 <?php include('include/footer.php');
  ?>
