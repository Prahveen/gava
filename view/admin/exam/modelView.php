<?php
  if (isset($_POST)) {
  if (!empty($_POST)) {
    //submiting the form


    if (empty($errors) === true) {
     
          
          $ques    = $_POST['ques'];
        
    
      mysql_query("INSERT INTO `exam`(`id`, `questions`, `sub`) VALUES (null,'$ques','$sub')") or die(mysql_error());
     // header('Location:'.$current_file.'?activity ');

    }


  }

}

?>




<div class="container">
  
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#lessonUpload">Lesson Upload</a>
        </h4>
      </div>
      <div id="lessonUpload" class="panel-collapse collapse">
        <div class="panel-body"> 
        
          <div class="col-md-10">
  <div class="thumbnail">
  <!-- form start!-->
    <form method="post" enctype="multipart/form-data">
      <div class="caption">
          <!-- p><input type="file" name="file" class="form-control"  id="file"></p> -->

      
          
          <p><textarea class="form-control" placeholder="ques" name="ques"></textarea></p>
            


          <input type="submit" class="form-control btn btn-primary" value="upload" >


      </div>
    </form>
  <!-- form end!-->
  </div>
</div>




        </div>
      </div>
    </div>
  </div>
</div>

