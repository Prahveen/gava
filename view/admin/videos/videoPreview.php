<div class="container">
  <h2>Dashboard</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Video Preview</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">

          <?php 
     
            $query = mysql_query("SELECT * FROM `video` WHERE `sub` = '$sub'");
              while($row = mysql_fetch_array($query)){   
                echo '<a data-toggle="modal" data-target=#'.$row['id'].'><li>'.$row['title'].'</li></a>';
                echo "<div class='container'>
                      <div class='modal fade' id='".$row['id']."' role='dialog'>
                        <div class='modal-dialog'>
                           <div class='modal-content'>
                            <div class='modal-header'>
                              <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              <h4 class='modal-title'>".$row['title']."</h4>
                            </div>
                            <div class='modal-body'>
                              <h2>".$row['subtitle']."</h2>
                                <iframe width='100' height='100' src='https://www.youtube.com/embed/".$row['url']."'   ></iframe>

                              
                              
                            </div>

                            <div class='modal-footer'>
                              <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                            </div>
                        </div>
      
                      </div>
                    </div>
                  </div>


              " ;
              } 
          ?>
        </div>       
      </div>
    </div>
  </div>
</div>

<?php include 'modelView.php';?>

