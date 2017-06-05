<!DOCTYPE html>
<html lang="en">
<head>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>
<body>
<!-- Add navigation bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/Yaathra_pro/Views/"><img src="logo.png" class="mm" height="90" width="250"></a>
    </div>

     <form class="navbar-form navbar-left">
      <div class="input-group" >
        <input type="text" class="form-control" size="35" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <div class="tab">
    <ul class="nav navbar-nav navbar-right"> 
      <li class="active"><a href="http://localhost/Yaathra_pro/Views/">Home</a></li>
      <li><a href="#">About us</a></li>
      <li><a href="#">Blog</a></li>  
      <li><a href="#">Contact</a></li>  

    </ul>
    </div>
<?php 

//connect to database
//session_start();
include('db_connect.php');

if(isset($_SESSION['user_id'])){

 echo '<div class="btnprofile">
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">'." ". $_SESSION['username']." ".
    '<span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">User Profile</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">User Setting</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Log out</a></li>
    </ul>
    
  </div>';}
    

 else{
   echo '<div class="btnlogin">
     
    <button type="button" class="btn" data-toggle="modal" data-target="#logModal">Login or Register</button></div>';
 }
 


 ?>

   
  
  </div>
</nav>
</body>
</html>