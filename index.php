<?php include('include/header.php');
 ?>
<?php if(isset($_SESSION['logged'])){
    header('Location: desk_view.php');
}
 ?>
<div class="col-lg-3"></div>
<div class="container-fluid col-lg-6" style="position: relative;top: 50px;">
<div class="panel panel-info" style= "border: solid black 1px;" >
  <div class="panel-heading" style="background-color:#01579b;">
    <h3 class="panel-title" style="color:black;text-align:center">Login Here</h3>
  </div>

  <div class="panel-body">
  <form class="form-horizontal" method="post" action="process/login_auth.php">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username: </label>
      <div class="col-lg-10">
        <input type="text" name="uname" class="form-control" id="inputEmail" placeholder="Username">
      </div>
    </div>


    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Password: </label>
      <div class="col-lg-10">
        <input type="password" name="pass" class="form-control" id="inputEmail" placeholder="Password">
      </div>
    </div>

</div>

<div class="panel-footer" style="position: relative;padding-left: 40%;padding-top: 2%;padding-bottom: 0.01%;">
<div class="form-group">

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>


</div>
</form>
</div>
</div>


<?php include('include/footer.php');
 ?>
