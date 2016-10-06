<?php include("connect.php"); //database connection ?>

<header>
   <div class="navbar navbar-inverse navbar-fixed-top"  >
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Tokens System</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="desk_view.php">Desk View</a></li>
      <li><a href="new_token.php">New Token</a></li>
      <li><a href="display_tokens.php">Display Tokens</a></li>
    <!--  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">dropdown-menu<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown_item1</a></li>
          <li><a href="PAGE.php">Dropdown_item2</a></li>
          <li><a href="PAGE.php">Dropdown_item3</a></li>
          </ul>
      </li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="#"><span class="label label-primary" style="font-size:small;">
       <?= $_SESSION['username']." on desk ". $_SESSION['desk']; ?></span></a></li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.php"><span class="glyphicon glyphicon-home" style="margin-right: 4%"></span>Home</a></li>
          <li class="divider"></li>
          <li><a href="process/logout.php"><span class="glyphicon glyphicon-off" style="margin-right: 4%;"></span>Logout</a></li>
          </ul>
      </li>
    </ul>
  </div>
</div>
</header>
