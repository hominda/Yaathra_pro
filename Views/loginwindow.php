<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

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
                                <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="uname" placeholder="email address">
                                    </div>
                          <span class="help-block"></span>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input  type="password" class="form-control" name="pwrd" placeholder="Password">
                                    </div><br>
                                    
                                    <div class="row">
                                        <div class="col-sm-offset-1 col-sm-4">
                                            <label><input type="checkbox" value="">Remember Me</label>
                                        </div>
                                         
                                        <p align="right"><button type="submit" name="submit1"  class="btn btn-primary btn-md">Login</button></p>
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
                                <h4 class="text-primary" align="right">Sign up</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>