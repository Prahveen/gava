
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

    <title>C4session</title>

    <!-- Bootstrap core CSS -->
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="public/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="public/bootstrap/js/ie-emulation-modes-warning.js"></script>


    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	
	<link href="public/public/css/style.css" rel="stylesheet" type="text/css" /> 
</head>


  <body >


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <img src="public/image/logo.png" alt="Mountain View" style="width:200; height:50px;  padding-left:0px; padding-top:0px; ">
		  <span style="display:inline-block; width: 30px;"></span>
          </div>
		
		
		            
              <ul class="nav navbar-nav">
			  
                <li ><a href="home.php"><f  style="font-size:110%">Home</f></a></li>
				
				<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<f  style="font-size:110%">Session</f> <span class="caret"></span></a>
				<ul class="dropdown-menu">
                    <li><a href="lession.php">HTML</a></li>
                    <li><a href="lession.php">C++</a></li>
                    <li><a href="lession.php">JAVA</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"><h4>Tutorials</h4></li>
                    <li><a href="http://www.w3schools.com">W3schools</a></li>
                    <li><a href="http://www.tutorialspoint.com">Tutorialspoint</a></li>
                  </ul>
				  
				 <li><a href="about.php"><f  style="font-size:110%">About</f></a></li>
                <li class="active"><a href="contact.php"><f  style="font-size:110%">Contact</f></a></li>
				<span style="display:inline-block; width: 230px;"></span>
                </li>
				 </ul>
	
	<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
		  <button type="submit" class="btn btn-primary btn-sm">Search</button>
        </div>
			
			 
            </div>
		</div>
      </div>
    </nav>

<br><br>



<div class="container">    
    <div style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title"><h2>Give us Feedback</h2></div>
   
   <div id="location1">
	<div id="space">

                    <form name="contact" onSubmit="return(validate());" method="post">
					
					    <div class="cleaner h20"></div>
						<label for="author">Name</label> 
						<div class="cleaner h20"></div>					
						<input type="text" id="author" name="author" class="required input_field" style="height:35px; width:350px; "  />
						<div class="cleaner h20"></div>
						
						<label for="email">Email</label>
						<div class="cleaner h20"></div>
						<input type="text" class="validate-email required input_field" name="email" id="email" style="height:35px; width:350px; " />
						<div class="cleaner h20"></div>
						
						<label for="subject">Name Of The Session</label>
						<div class="cleaner h20"></div>
						<input type="text" class="validate-subject required input_field" name="subject" id="subject" style="height:35px; width:350px;" />				               
						<div class="cleaner h20"></div>
						
						<label for="text">Message</label>
						<div class="cleaner h20"></div>
						<textarea id="text" name="text" rows="0" cols="0" class="required" style="height:170px; width:450px;" ></textarea>
						<div class="cleaner h20"></div>
						
						<div class="cleaner h20"></div>			
						<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" style="height:35px; width:80px;" />
						<span style="display:inline-block; width: 280px;"></span>
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r"  style="height:35px; width:80px;"/>
						
					</form>
    
                </div>
				</div>
                </div>
        </div>
        </div>
        </div>
       
    

      <hr>
<center>
      <footer>
        <p>Copyright  &copy; 2015 C4session.com</p>
      </footer>
      </center>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

<!-- /container -->

</body>
</html>