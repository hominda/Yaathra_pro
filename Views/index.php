
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



<table>
<col width="235">
   <col width="880">
   <tr><td>
<div class="col-md-12">
 <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">
      <span class="glyphicon glyphicon-plus"></span> ASK A QUESTION
    </button></div></td>
<!-- question tab -->
<td>
<div class="col-md-4">
<ul class="nav nav-tabs">
    <li class="active"><a  data-toggle="pill" href="#menu1">Latest</a></li>
    <li><a data-toggle="pill" href="#menu2">Votes</a></li>
    <li><a  data-toggle="pill" href="#menu3"> Unanswered</a></li>
</ul>
</div></td></tr></table>
  <!-- ---- -->



<!-- for cheeck login details -->
<?php
session_start();
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

  
  $body=$db->real_escape_string($body);
   $tag=$db->real_escape_string($tag);
  
  if($category && $body && $tag){
    $query = $db->query("insert into questions (category,body,tag) values('$category','$body','$tag')");
    if($query){

      echo '<div class="alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center><strong>Successfully Added!</strong> pleace wating few minute for check.
            </center></div>';
            // header("Refresh:4");

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
      // header("Refresh:4");
    }
  }


?>


<!-- ------------ -->






<!-- Add side bar manu -->
<?php include('sidebar.php');?>

<!-- login window -->
<!-- homi part -->
  <!--modal popup for login/singup-->
        
    <?php include('loginwindow.php');?>  

<!-- sakjaskjksjfd --> 

<!-- get question details from database -->


<div class="tab-content">
   
  <div id="menu1" class="tab-pane fade in active">
  <?php
include('db_connect.php');
$query1= $db->prepare("SELECT q_id,category,body,tag FROM questions order by q_id desc ");
$query1->execute();
$query1->bind_result($q_id,$category,$body,$tag);

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
    <td ><h4><?php echo $body?></h4></td>
    <td ><center> <div class="numberCircle"><span>1</span></div></center></td>
    <td > <center><div class="numberCircle"><span>1</span></div></center></td> 
    <td ><center> <div class="numberCircle"><span>1</span></div></center></td>  
</tr>
<tr>
    <td></td>
    <td><center><br>viwes</center></td>
    <td><center><br>answers</center></td>
    <td><center><br>votes</center></td>
</tr>
</table>

<p>Tag : <?php echo $tag?></p>
 <p>Category :<?php echo $category?></p>

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


<!-- include ask question window -->
<?php include('texteditor.php');?>  


 
</body>
</html>