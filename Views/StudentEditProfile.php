<!DOCTYPE html>
<html>

<?php
session_start();
require_once './DB/DbConnection.php';
    
$sql = "SELECT * FROM student_tbl";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $first_name=$row["first_name"];
    	$mname=$row["mname"];
    	$last_name=$row["last_name"];
    	$age=$row["age"];
    	$add_no=$row["add_no"];
    	$add_street=$row["add_street"];
    	$add_city=$row["add_city"];
    	$email=$row["email"];
    	$mobile_no=$row["mobile_no"];
    	$land_no=$row["land_no"];
    	$nic=$row["nic"];
    	$uname = $row["uname"];
        $pass = $row["pass"];
    }
}
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yaathra | Edit Student Profile</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" style="width:55px;height:55px;" class="img-circle" src="uploads/student/<?php echo $id;?>.jpeg" />
                                 </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $first_name;?><?php echo ' ';?><?php echo $last_name;?></strong>
                                 </span>  </span> </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>


        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message"></span>
                    </li>
                    

                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
                </nav>
            </div>
            
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Edit Profile</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
         <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="ibox-content">
                <form enctype="multipart/form-data" action="" method="post" class="form-horizontal">
                    <div class="row">
                    <div class="col-sm-9">
                    <div class="form-group"><label class="col-sm-3 control-label">First Name:</label>

                        <div class="col-sm-7"><input type="text" class="form-control" name="fname" value="<?php echo $first_name;?>"></div>
                    </div>
                    <!-- <div class="hr-line-dashed"></div> -->
                    <div class="form-group"><label class="col-sm-3 control-label">Middle Name:</label>

                        <div class="col-sm-7"><input type="text" class="form-control" name="mname" value="<?php echo $mname;?>"></div>
                    </div>
                    <!-- <div class="hr-line-dashed"></div> -->
                    <div class="form-group"><label class="col-sm-3 control-label">Last Name:</label>

                        <div class="col-sm-7"><input type="text" class="form-control" name="lname" value="<?php echo $last_name;?>"></div>
                    </div>
                    </div>
                        <div class="col-sm-3"><img src="uploads/student/<?php echo $id;?>.jpeg" class="circle" style="height:106px;width:106px" alt="Profile">
                        
                        <div class="pull-right btn-group">
                                   <center> <label title="Upload image file" for="inputImage" class="btn btn-info">
                                        <input type="file" accept="image/*" name="image" id="inputImage" class="hide">
                                        Upload New Image
                                    </label>
                            <br>
                            <br>
                            <br>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                                       </center>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Age:</label>

                        <div class="col-sm-10"><input type="text" class="form-control" name="age" value="<?php echo $age;?>"></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">NIC:</label>

                        <div class="col-sm-10"><input type="text" class="form-control" name="nic" value="<?php echo $nic;?>"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Address No:</label>

                        <div class="col-sm-10"><input type="text" class="form-control" name="add_no" value="<?php echo $add_no;?>"></div>
                    </div>
                    
                    <div class="form-group"><label class="col-sm-2 control-label">Street:</label>

                        <div class="col-sm-10"><input type="text" class="form-control" name="add_street" value="<?php echo $add_street;?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">City:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="add_city" value="<?php echo $add_city;?>"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Email:</label>

                        <div class="col-sm-10"><input type="text" class="form-control" name="email" value="<?php echo $email;?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Mobile Number:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="mobile_no"  value="<?php echo $mobile_no;?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Land Number:</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="land_no" value="<?php echo $land_no;?>"></div>
                    </div>
                    
                    
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-5 control-label">User Name:</label>
                        <div class="col-sm-7"><input name="uname" required type="text" class="form-control"   value="<?php echo $uname;?>"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-5 control-label">Password:</label>
                        <div class="col-sm-7"><input type="password" value="<?php echo $pass;?>" class="form-control" name="pass1"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-5 control-label">Retype Password:</label>
                        <div class="col-sm-7"><input type="password" required class="form-control" name="pass2"></div>
                    </div>
                    <div class="form-group">
                        <center>
                            <button class="btn btn-warning" type="submit">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </center>
                    </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="google-map" id="map" style="width:100%;height:300px"></div>
                    </div>
                    <div class="form-group"></div>
                </form>
                </div>
             </div>
        </div>
    </div>
</div>


    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- FooTable -->
    <script src="js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>

</body>

<?php $con->close(); ?>

</html>
