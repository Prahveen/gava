<div class="container">
  <h2>Dashboard</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Video Preview</a>
        </h4>
      </div>
      <div  class="panel">
        <div class="panel-body">

          <?php 
     
            $query = mysql_query("SELECT * FROM `video` WHERE `sub` = '$sub'");
              while($row = mysql_fetch_array($query)) {   ?>
               
               
                     <iframe width="250" height="200" src='https://www.youtube.com/embed/<?php echo $row['url'];?> '></iframe>
                  
                <?php } ?>
        </div>       
      </div>
    </div>
  </div>
</div>



