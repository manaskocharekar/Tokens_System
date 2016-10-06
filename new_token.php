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
 <div class="container-fluid col-lg-6 col-lg-offset-3" style="position: relative;top: 50px;">
 <div class="panel panel-info" style= "border: solid black 1px;" >
   <div class="panel-heading" style="background-color:#004d40;">
     <h3 class="panel-title" style="color:black;text-align:center">Generate New Token</h3>
   </div>

   <div class="panel-body">
   <form class="form-horizontal" method="post" action="process/proc_token.php">
     <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Customer Name: </label>
       <div class="col-lg-10">
         <input type="text" name="cname" class="form-control" id="" placeholder="Username">
       </div>
     </div>
</div>

 <div class="panel-footer" style="position: relative;padding-left: 40%;padding-top: 2%;padding-bottom: 0.01%;">
 <div class="form-group">
         <button type="submit" style = "background-color:#004d40;" class="btn btn-primary">Submit</button>
 </div>
 </div>
 </form>
 </div>
 </div>


 <?php include('include/footer.php');
  ?>
