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
<div class="col-md-12">
 <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">
      <span class="glyphicon glyphicon-plus"></span> ASK A QUESTION
    </button></div>
<br><br>
<!-- add side bar -->
<?php include('sidebar.php');?>

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


<?php include('loginwindow.php');?> 
<?php include('texteditor.php');?>  

</body>
</html>