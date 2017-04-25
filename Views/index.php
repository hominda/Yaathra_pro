<<<<<<< HEAD
<?php session_start(); ?>
=======
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
            <strong>Success!</strong> This alert box could indicate a successful or positive action.
            </div>';
           header("Refresh:2");

    }
    else{
      echo "error";
    }
  }else{
      echo "missing data";
    }
  }


?>




>>>>>>> origin/master
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yaathra</title>
  <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
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


</head>
    
    <body>
        
        <!-- add nav bar -->
        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header" style="height:75px">
                    <a class="navbar-brand" href="#"><img src="logo.png" class="mm"  width="150"></a>
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
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>  
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="btnlogin"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#logModal">Login or Register</button></div>
            </div>
        </nav>
        
        <div class="col-md-12 left-sidebar">
            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-plus"></span> ASK A QUESTION
            </button>
        </div>

        <!-- create side bar manu -->
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2 ">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>  Questions</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-tags"></i>  Tags</a></li>
                        <li><a href="#"><i class="fa fa-trophy"></i>  Badges</a></li>
                        <li><a href="#"><i class="fa fa-th-list"></i>  Categories</a></li>
                        <li><a href="#"><i class="fa fa-users"></i>  Users</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                
                <!-- Modal content-->
                
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Ask a Question</h3>
                    </div>
                    
                    <div class="modal-body" style="height:400px;">
                        <form action="" method="post">
                            
                            <div class="col-xs-12"><select class="form-control" id="sel1">
                                <option>Select a category</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                </select>
                            </div>
                            
                            <object type="text/php" data="askquestion.php" style="width:100%; height:275px; margin:1%;">
                            </object>
                            
                            <div class="col-xs-12">
                                
                                <input type="text" class="form-control" placeholder="Tags(max 5 tags)"  id="usr"></div>
                        </form>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-md">SUBMIT QUESTION</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
        
        <!--modal popup for login/singup-->
        
        <div class="modal fade" id="logModal" role="dialog">
            <div class="modal-dialog">
                
                <!-- Modal content-->
                
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Login or Register</h3>
                    </div>
                    
                    <div class="modal-body" style="height:365px;">
                        
                        <a href="#" class="btn azm-social azm-btn azm-pill azm-shadow-bottom azm-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</a>
                        
                        <a href="#" class="btn azm-social azm-btn azm-pill azm-shadow-bottom azm-google-plus"><i class="fa fa-google-plus"></i> Sign in with Google+</a>
                        
                        <hr>
                        
                        <div class="row omb_row-sm-offset-3">
                            <div class="col-xs-12 col-sm-9">
                                <form class="omb_loginForm" action="loginAction.php" autocomplete="off" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="email" placeholder="email address">
                                    </div>
                          <span class="help-block"></span>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input  type="password" class="form-control" name="pass" placeholder="Password">
                                    </div><br>
                                    
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-4">
                                            <label><input type="checkbox" value="">Remember Me</label>
                                        </div>
                                        
                                        <p align="right"><button class="btn btn-md btn-primary" name="login" type="submit">Login</button></p>
                                        <h5 align="right" class="text-primary">Forgot password?</h5>
                                        
                                    </div>
                                </form>
                            </div>
                        </div><br>
                        
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm-offset-9 col-sm-6">
                                    <h5 align="left">Don't have account!</h5>
                                </div>
                                <h4 class="text-primary" align="right" data-toggle="modal" data-target="#signupModal"><a href="" >Sign up</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
=======
        <div class="modal-body" style="height:400px;">

     <form action="" method="post"  >

         <div class="col-xs-12"><select class="form-control" name="category" >
                <option>Select a category</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select></div>

      
     <div style="width:100%; height:20%; margin:1%;" class="col-lg-10 nopadding">
    <textarea id="txtEditor" name="body" ></textarea> </div> 


    <div class="col-xs-12">
        <input type="text" class="form-control" placeholder="Tags(max 5 tags)"  name="tag" id="tag"></div>

      </div>


        <div class="modal-footer">
          <button type="submit" name="submit"  class="btn btn-primary btn-md">SUBMIT QUESTION</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      
      
    </div>

</body>
>>>>>>> origin/master
</html>