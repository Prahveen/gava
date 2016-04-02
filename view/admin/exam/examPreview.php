<div class="container">
  <h2>Dashboard</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Lesson Preview</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">

          <?php 
          
            $query = mysql_query("SELECT * FROM `exam` where `sub`='$sub'");
              while($row = mysql_fetch_array($query)){ ?> 
                
                <div class="col-sm-9">
                  <div class="col-sm-9">
                    <?php echo  $row['questions'];?>
                  </div>
                  <div class="col-sm-3 ">
                     <button class="btn btn-primary pull-right" value="edit">Edit</button> 
                     <button class="btn btn-danger pull-right" value="delete">Delete</button> 
                  </div>
                </div>
          <?php      
              } 
          ?>
        </div>       
      </div>
    </div>
  </div>
</div>

<?php include 'modelView.php';?>