
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

    <title>Lession</title>

     <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="public/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="public/css/sidebar.css" rel="stylesheet">
  
   

  </head>

<body>

     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a href="home.php"> <img src="public/image/logo.png" alt="Mountain View" style="width:200; height:50px;  padding-left:0px; padding-top:0px; "></a>
      <span style="display:inline-block; width: 30px;"></span>
          </div>
    
    
                
              <ul class="nav navbar-nav">
        
                <li ><a href="home.php"><f  style="font-size:110%">Home</f></a></li>
        
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <f  style="font-size:110%">Session</f> <span class="caret"></span></a>
        <ul class="dropdown-menu">
                    <li><a href="lesson.php">HTML</a></li>
                    <li><a href="lesson.php">C++</a></li>
                    <li><a href="lesson.php">JAVA</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"><h4>Tutorials</h4></li>
                    <li><a href="http://www.w3schools.com">W3schools</a></li>
                    <li><a href="http://www.tutorialspoint.com">Tutorialspoint</a></li>
                  </ul>
          
         <li><a href="about.php"><f  style="font-size:110%">About</f></a></li>
                <li class="active"><a href="contact.php"><f  style="font-size:110%">Contact</f></a></li>
        <span style="display:inline-block; width: 100px;"></span>
                </li>
         </ul>
  
  <div class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
      <button type="submit" class="btn btn-primary btn-sm">Search</button>
  <a href="logout.php"> <button type="submit" class="btn btn-primary" >Logout</button></a>
        </div>
    
       
            </div>
    </div>
      </div>
    </nav>


    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li ><!-- HTML!-->
                  <a href="javascript:;" data-toggle="collapse" data-target="#html"><i class="fa fa-fw fa-envelope"></i> HTML <i class="fa fa-fw fa-caret-down"></i></a>

                    <ul id="html" class="collapse">

                        <li>
                          <a href="lesson.php?html=tute">Tutorial</a>
                        </li>
                        <li>
                          <a href="lesson.php?html=vedio">Vedio</a>
                        </li>
                        <li>
                          <a href="lesson.php?html=exam">Exam</a>
                        </li>
                      </ul>
                </li>
                 <li ><!-- C++!-->
                  <a href="javascript:;" data-toggle="collapse" data-target="#c"><i class="fa fa-fw fa-envelope"></i> C++ <i class="fa fa-fw fa-caret-down"></i></a>

                    <ul id="c" class="collapse">

                        <li>
                          <a href="lesson.php?c=tute">Tutorial</a>
                        </li>
                        <li>
                          <a href="lesson.php?c=vedio">Vedio</a>
                        </li>
                        <li>
                          <a href="lesson.php?c=exam">Exam</a>
                        </li>
                      </ul>
                </li>
                  <li ><!-- C++!-->
                  <a href="javascript:;" data-toggle="collapse" data-target="#java"><i class="fa fa-fw fa-envelope"></i> Java <i class="fa fa-fw fa-caret-down"></i></a>

                    <ul id="java" class="collapse">

                        <li>
                          <a href="">Tutorial</a>
                        </li>
                        <li>
                          <a href="">Vedio</a>
                        </li>
                        <li>
                          <a href="">Exam</a>
                        </li>
                      </ul>
                </li>
                <li>
                 
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
         <!-- Page Content -->
        <div id="page-content-wrapper" >
            <div class="container-fluid" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-12">
                        <?php 
                          if (!empty($_GET)) {
                            if ($_GET['html']){
                              include 'dashboard.php';
                            }else if ($_GET['c']){
                                include 'dashboard.php';
                            }
                          }
                        
                        ?>
                            
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>

   













    <!-- <div class="container-fluid" >
      <div class="row" >
        <div class="col-sm-3 col-md-2 sidebar" >
          <ul class="nav nav-sidebar">
      <li><a ><h3>HTML</h3></a></li>
            <li class="active"><a href="#">Tutorials <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Exam</a></li>
          </ul>
          <ul class="nav nav-sidebar">
      <li><a ><h3>C++<h3></a></li>
            <li><a href="">Tutorials</a></li>
            <li><a href="">Videos</a></li>
            <li><a href="">Exam</a></li>
            
          </ul>
          <ul class="nav nav-sidebar">
            <li><a ><h3>JAVA<h3></a></li>
            <li><a href="">Tutorials</a></li>
            <li><a href="">Videos</a></li>
      <li><a href="">Exam</a></li>
          </ul>
        </div> -->
    
    
    
        

  
  
  
  
  
  
  
  

