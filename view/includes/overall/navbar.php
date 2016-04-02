<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <img src="public/image/logo.png" alt="Mountain View" style="width:200; height:62px;  padding-left:0px; padding-top:0px; ">
            <span style="display:inline-block; width: 30px;"></span>
      </div>
    <br>
    
              <div id="navbar" class="navbar-collapse collapse">
              <div class=" navbar-right" >
                <?php include 'view\includes\login_confirm.php';?>
              </div>


            <!--/.navbar-collapse -->                   
             <ul class="nav navbar-nav">
             <li class="active"><a href="home.php"><f  style="font-size:110%"><b>Home</b></f></a></li>           
             <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?php include 'view/includes/navbar_select.php';?>
              <li><a href="about.php"><f  style="font-size:110%"><b>About</b></f></a></li>
              <li><a href="contact.php"><f  style="font-size:110%"><b>Contact</b></f></a></li>
              <span style="display:inline-block; width:60px;"></span>
             </li>
             </ul>
      
              <div class="navbar-form navbar-left" role="search">
              <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
              <button type="submit" class="btn btn-primary btn-sm">search</button>
          </div>          
        </div>
      </div>
   </nav>