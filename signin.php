<?php

require_once 'core/init.php';

    if (empty($_POST) === false) {
        $username = $_POST['username'];
            $password = $_POST['password'];

        if (user_exists($username) === false){ //checking user name exists
          
        }else {
            $logging = user_logging($username, $password); //user logging function
            if ($logging === false) {
                $error =  'Need valid user name and password';

            }else {
                $_SESSION['user_id'] = $logging;
                if (user_access($_SESSION['user_id'] , 1)) {
                   header('Location:lesson.php');
                }else{
                    header('Location:lesson.php');
                }
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign in</title>
    <!-- Bootstrap core CSS -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="public/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css" />
    <script type="text/javascript" src="public/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
	
</head>


<body style="background-color:lightgrey;">



   <!--navigatin bar!-->
   <?php include 'view/includes/ovnavbar.php';?>
   <!--navigatin bar!-->

	
<br><br><br>
<br><br><br>


<div class="container">    
    <div style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                    <form class="form-horizontal" role="form" method="post" >
                                
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username ">                                        
                                </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                

                            
                        <div class="input-group">
                                  <div class="checkbox">
                                    <label>
                                      <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                  </div>
                                </div>


                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                  <button type="submit" class="btn btn-success" >Login </button>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Don't have an account! 
                                    <a href="signup.php">
                                        Sign Up Here
                                    </a>
                                    </div>
                                </div>
                            </div> 
                            
                        </form>     
                </div>                     
        </div>  
    </div>       
</div>
    





