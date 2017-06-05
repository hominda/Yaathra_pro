<!DOCTYPE html>
<html>
<head>
  <!-- <title>Yaathra</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.2.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>  -->

  <title>Yaathra</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 
    
    <script src="editor.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="editor.js"></script>
    <script>
      $(document).ready(function() {
        $("#txtEditor").Editor();
      });

      $(document).submit(function(){
            $("#txtEditor").val($("#txtEditor").Editor("getText"));
        });

    </script>
  
    <link href="editor.css" type="text/css" rel="stylesheet"/>
     <link rel="stylesheet" type="text/css" href="main2.css">

<!-- new one from the original site-->
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/plugins/et_demobar/css/bootstrap.min4381.css?ver=1482833515' type='text/css' media='all' />
<link rel='stylesheet' id='demobar-font-awesome-css'  href='../wp-content/plugins/et_demobar/css/font-awesome.minb4a3.css?ver=1464666882' type='text/css' media='all' />
<link rel='stylesheet' id='mCustomScrollbar-css'  href='../wp-content/plugins/et_demobar/css/jquery.mCustomScrollbar.minb4a3.css?ver=1464666882' type='text/css' media='all' />
<link rel='stylesheet' id='demo-bar-css'  href='../wp-content/plugins/et_demobar/css/main4381.css?ver=1482833515' type='text/css' media='all' />
<link rel='stylesheet' id='wp-color-picker-css'  href='../wp-admin/css/color-picker.min8deb.css?ver=1483691855' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='../wp-content/themes/qaengine/css/libs/font-awesome.min73c9.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='main-style-css'  href='../wp-content/themes/qaengine/css/main73c9.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='editor-style-css'  href='../wp-content/themes/qaengine/css/editor73c9.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='push-menu-css'  href='../wp-content/themes/qaengine/css/libs/push-menu73c9.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='chosen-css'  href='../wp-content/themes/qaengine/css/libs/chosen73c9.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='custom-style-css'  href='../wp-content/themes/qaengine/css/custom73c9.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='date-picker-style-css'  href='../wp-content/themes/qaengine/css/bootstrap-datetimepicker.min73c9.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='color-picker-style-css'  href='../wp-content/themes/qaengine/css/colorpicker73c9.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='../wp-content/themes/qaengine/style73c9.css?ver=1483511937' type='text/css' media='all' />
<style >
  article {
    margin-left: 200px;
    margin-right: 100px;
    border-left: 1px solid gray;
    /*border-top: 1px solid gray;
    border-right: 1px solid gray;*/
    padding: 1em;
    overflow: hidden;
}


</style> 

</head>
<body>
<body>

    <?php 

//connect to database
session_start();
include('db_connect.php');
if(isset($_SESSION['user_id'])){
  $target="#myModal";
}
else{
  $target="#logModal";
}
?>
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
      $_SESSION['username']=$row->username;
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
      //header("Refresh:3");
    }
  }


?>


<!-- ------------ -->
<!-- Add navigation bar -->
<?php include('navbar.php');?>


 
    <table class="col-md-2">
<col width="235">
   <col width="880">
   <tr><td>
<div class="col-md-2">
 <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target=<?php echo $target ?>>
      <span class="glyphicon glyphicon-plus"></span> ASK A QUESTION
    </button></div>

</td>
    
<!-- question tab -->
</tr>
</table>
<!--<article>
  <div class="col-md-10 " >
  <li><a><i class="glyphicon fa fa-trophy" size="1px"></i> Badges</a></li>
  
</div>

</article>-->


 
<!-- <div class="col-md-8 main-content"> -->
    <!-- <div class="row select-category">
            <div class="col-md-12 current-category">
                <span>Badges</span>
            </div>
        </div> -->
        <div class="tq">
<div class="col-md-10">
    <div class="row select-category">

            <div class="col-md-12 col-xs-12 sort-questions">
                <ul>
                    <li>
                        <a class="active" href="categories.html">Grade 11 Syllables</a>
                    </li>
                    <li>
                        <a href="indexd353.html?orderby=popular" class="">Grade 10 Syllables</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-tag-list">
            <div class="tags-list row">
                <div class="col-md-6">
                    <span class="character">Real Numbers</span>
                </div>
                <div class="clearfix"></div>
                <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="#" class="q-tag">Questions</a>
                        </div>

                <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="../pdf/textB1.pdf" class="q-tag">Text Book</a>
                        </div>

                <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="../pdf/3101.pdf" class="q-tag">2016 O/L paper</a>
                        </div>

                        <!-- ********* -->
                        <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="../pdf/3101.pdf" class="q-tag">2015 O/L paper</a>
                        </div>
                        <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="../pdf/3101.pdf" class="q-tag">2014 O/L paper</a>
                        </div>
                        <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="../pdf/3101.pdf" class="q-tag">2013 O/L paper</a>
                        </div>
                        <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="../pdf/3101.pdf" class="q-tag">2012 O/L paper</a>
                        </div> 
                        <!--  -->
                <div class="col-md-12">
                            <div class="clearfix"></div>
                            <div class="grey-line"></div>
                        </div>

                <!-- ******************** -->
                <div class="col-md-12">
                    <span class="character">Indices And Logarithms 1 & 2</span>
                </div>
                <div class="clearfix"></div>
                <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="#" class="q-tag">Questions</a>
                        </div>

                <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="#" class="q-tag">2011 O/L paper</a>
                        </div>

                <div class="col-md-12">
                            <div class="clearfix"></div>
                            <div class="grey-line"></div>
                        </div>
                <!-- ********************* -->
                <div class="col-md-12">
                    <span class="character">The Surfaces Area Of Solids</span>
                </div>
                <div class="clearfix"></div>
                <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="#" class="q-tag">Questions</a>
                        </div>

                <div class="tag-item cat-item col-md-2 col-xs-2">
                            <a href="#" class="q-tag">2011 O/L paper</a>
                        </div>

                <div class="col-md-12">
                            <div class="clearfix"></div>
                            <div class="grey-line"></div>
                        </div>
            </div>


        </div>
</div></div>

<!-- </div> -->








<!-- login window -->
<!-- homi part -->
  <!--modal popup for login/singup-->
        
    <?php include('loginwindow.php');?> 


<div class="container">
    <div class="row">
        <div class="col-sm-2 ">
            <?php include('sidebar.php');?>
            
        </div>
        
          
        
        
        
    </div>
</div>



<!-- include ask question window -->
<?php include('texteditor.php');?> 

  


</body>
</html>





