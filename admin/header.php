<?php 
// session_start();
if(isset($_SESSION['designation']))
{
  $designation=$_SESSION['designation'];
  if($designation=='EC')
  {
    $event=$_SESSION['event_name'];
  }

  if($designation=='admin')
  {
    //  $event=$_SESSION['event_name'];
  }

}
else
{
  echo"session invalid";
}


?>
<header id="header">
<div class="container">

<div id="logo" class="pull-left">
   
    <a href="#intro" class="scrollto"><img src="./img/KJSIMlogo.jpg" alt="" title=""></a>
</div>


<nav id="navbar navbar-expand-lg">
    <ul class="navbar-nav nav-menu">
       <li class="nav-item menu-active"><a href="team_detail.php">Team Details</a></li>
       <li class="nav-item"><a href="solo_event.php">Solo Event Details</a></li>
       <?php 
       if($_SESSION['designation']=='admin')
       {
       ?>
       <li><a href="pay_details.php">Payment Details</a></li>
       <?php
       }
       ?>
      

       <li class="nav-item"><a href="logout.php" value="logout" id="logoutbtn">Logout</a></li>
    

    </ul>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="team_detail.php">Team Details </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- #nav-menu-container -->

</div>
</header>