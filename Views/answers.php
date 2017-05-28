<!DOCTYPE html>
<html lang="en">
<head>
  <title>Answers</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
   
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

<div class="col-sm-2" >
<!-- add side bar -->
<?php include('sidebar.php');?>
</div>
<!-- show questions -->
 <?php
include('db_connect.php');
$qno=$_GET['id'];
$query1= $db->prepare("SELECT q_id,category,body,tag,date FROM questions where q_id=$qno");
$query1->execute();
$query1->bind_result($q_id,$category,$body,$tag,$date);
?>
<?php while($query1->fetch()):
?>

<h4 class="bb"><?php echo $body?></h4>
<?php endwhile?>

<!-- for add Answers to databases -->
<?php 

include('db_connect.php');
if(isset($_POST['submit'])){

  $qno=$_GET['id'];
  $body=$_POST['body'];
  $date=date('Y-m-d ');

  
  $body=$db->real_escape_string($body);
  
  if($qno && $body && $date){
    $query = $db->query("INSERT into answers (q_id,body,date) values('$qno','$body','$date')");
    $query2 = $db->query("UPDATE questions set answers=answers + 1 where q_id=$qno");
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
      //header("Refresh:3");
    }
  }


?>

 <?php
include('db_connect.php');
$qno=$_GET['id'];
$query1= $db->prepare("SELECT ans_id,body,date FROM answers where q_id=$qno order by q_id desc  ");
$query1->execute();
$query1->bind_result($ans_id,$body,$date);

?>

<?php while($query1->fetch()):
?>
<!-- show Answers -->
<div class="tt">

    
    <h4 style="color:#3C3F40;"><?php echo $body?></h4>

<?php $array=explode(",",$tag)?>
<br>
 <p><b>Engine Admin Demo </b>  Asked on <span style="color:#60ABC4"><?php echo $date?> </span></p>

</div>
<?php endwhile?>
<br>



 <div class="tt" >
<?php include('editor.php');?> 

</div>

<?php include('loginwindow.php');?> 
<?php include('texteditor.php');?>  

</body>
</html>