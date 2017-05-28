
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yaathra</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="editor.js"></script>
    <script>
      $(document).ready(function() {
        $("#txtEditor").Editor();
      });

      $(document).submit(function(){
            $("#txtEditor").val($("#txtEditor").Editor("getText"));
        });

    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="editor.css" type="text/css" rel="stylesheet"/>
     <link rel="stylesheet" type="text/css" href="main2.css">
<style>

body { padding-right: 0 !important }

</style>
</head>


<body>


<!-- Add navigation bar -->
<?php include('navbar.php');?>

 <?php 
 //connect to database
include('db_connect.php');
$record_count = $db->query("SELECT * FROM questions ");
//amount dispalyed
$per_page =3;
//number of pages
$pages=ceil($record_count->num_rows/$per_page);
 //get page number
if(isset($_GET['p']) && is_numeric($_GET['p'])){
  $page=$_GET['p'];
  
}else{
  $page=1;
  }
if($page<=0){
$start=0;}

else{
$start = $page * $per_page-$per_page;}

$prev=$page-1;
$next=$page +1;?> 

<?php 
session_start();
//connect to database

include('db_connect.php');
if(isset($_SESSION['user_id'])){
  $target="#myModal";
}
else{
  $target="#logModal";
}
?>


<table>
<col width="235">
   <col width="880">
   <tr><th>
<div class="col-md-12">
  
 <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target=<?php echo $target ?>>
      <span class="glyphicon glyphicon-plus"></span> ASK A QUESTION
    </button></div></th>
<!-- question tab -->
<th><div class="a4"  style="font-family:verdana; font-size:200%;"> All Questions</div>
</th></tr>
<tr>
    <td></td>
    <td><div class="a4">
<ul class="nav nav-tabs">
    <li class="active"><a  data-toggle="pill" href="#menu1">Latest</a></li>
    <li><a data-toggle="pill" href="#menu2">Votes</a></li>
    <li><a  data-toggle="pill" href="#menu3"> Unanswered</a></li>

</ul>
</div>
</div>
    </td> 
    
  </tr></table>
  <!-- ---- -->



<!-- for cheeck login details -->
<?php

if(isset($_POST['submit1'])){
  $uname= $_POST['uname'];
  $pwrd= $_POST['pwrd'];
  //include database connection
  include('db_connect.php');
  if(empty($uname)|| empty($pwrd)){
     echo '<div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <center> <strong> Login UnSuccessful!</strong> missing data or some thing.
          </div></center>
          </div>';
  }else{
    $uname=strip_tags($uname);
    $uname=$db->real_escape_string($uname);
    $pwrd=strip_tags($pwrd);
    $pwrd=md5($pwrd);
    $query=$db->query("select user_id,username from user where username='$uname' and password='$pwrd'");
    if($query->num_rows ===1){
      while($row=$query->fetch_object()){
      $_SESSION['user_id']=$row->user_id;
    }
      header('Location:index.php');

      exit();
    }else{
       echo '<div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <center> <strong> Login UnSuccessful!</strong> missing data or some thing.
          </div></center>
          </div>';
    }
  }
  
}

?>
<!-- -------- -->


<!-- for add questions to databases -->
<?php 

include('db_connect.php');
if(isset($_POST['submit'])){
  //get the blog database
  $category=$_POST['category'];
  $body=$_POST['body'];
  $tag=$_POST['tag'];
  $date=date('Y-m-d ');

  
  $body=$db->real_escape_string($body);
   $tag=$db->real_escape_string($tag);
  
  if($category && $body && $tag && $date){
    $query = $db->query("insert into questions (category,body,tag,date) values('$category','$body','$tag','$date')");
    if($query){

      echo '<div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center><strong>Successfully Added!</strong> pleace wating few minute for check.
            </center></div>';
            // header("Refresh:3");

    }
    else{
      echo "error";
    }
  }else{
      echo '<div class="alert alert-danger alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center> <strong>UnSuccessful!</strong> missing data or some thing.
     </div></center>
      </div>';
      header("Refresh:3");
    }
  }


?>


<!-- ------------ -->








<!-- login window -->
<!-- homi part -->
  <!--modal popup for login/singup-->
        
    <?php include('loginwindow.php');?>  

<!-- sakjaskjksjfd --> 

<!-- get question details from database -->
<div class="container-">
    <div class="row">




<!-- Add side bar manu -->
<div class="col-sm-2" >
<?php include('sidebar.php');?>
</div>


 <div class="col-sm-20" >
<div class="tab-content">
   
  <div id="menu1" class="tab-pane fade in active">
  <?php
include('db_connect.php');
$query1= $db->prepare("SELECT q_id,category,body,tag,date,answers FROM questions order by q_id desc  limit $start, $per_page");
$query1->execute();
$query1->bind_result($q_id,$category,$body,$tag,$date,$answers);

?>

<?php while($query1->fetch()):
?>
<!-- show questions -->
<div class="aa">
  <table>
    <col width="630">
   <col width="80">
   <col width="80">
   <col width="80">
   <col width="80">
<tr>
    
    <td ><a itemprop="url" href='answers.php?id=<?php echo $q_id?>'><h4 style="color:#3C3F40;"><?php echo $body?></h4></a></td >
    <td ><center> <div class="numberCircle"><span>1</span></div></center></td>
    <td > <center><div class="numberCircle"><span><?php echo $answers?></span></div></center></td> 
    <td ><center> <div class="numberCircle"><span>1</span></div></center></td>  
</tr>
<tr>
    <td></td>
    <td><center><br>viwes</center></td>
    <td><center><br>answers</center></td>
    <td><center><br>votes</center></td>
</tr>
</table>
<?php $array=explode(",",$tag)?>
<p>
 <?php foreach ($array as $v) :?>
        <span style=" font-size:110%;" class="chip"><?php echo $v?> </span>
        <?php endforeach;?>

</p><br>
 <p><b>Engine Admin Demo </b>  Asked on <?php echo $date?> in <span style="color:#60ABC4"><?php echo $category?></span></p>

</div>
<?php endwhile?>
    </div>

    <div id="menu2" class="tab-pane fade">
      <div class="a1"><h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <div class="a2"><h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p></div>
    </div>
  </div>
</div>

</div></div>


<div class="a5">
 <ul class="pager">
<?php
if($prev >0){
  echo "<li class='previous'><a href='index.php?p=$prev'><span class='glyphicon glyphicon-backward'></span>  Previous </a></li>";
}
if($page<$pages){
  echo "<li class='next'><a href='index.php?p=$next'>Next  <span class='glyphicon glyphicon-forward'></span></a></li>";
}
?>
  </ul>
</div>
<!-- include ask question window -->
<?php include('texteditor.php');?>  


 
</body>
</html>