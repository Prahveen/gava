<?php
  if (isset($_POST)) {
  if (!empty($_POST)) {
    //submiting the form


    if (empty($errors) === true) {
     
          
          $title    = $_POST['title'];
          $subtitle = $_POST['subtitle'];
          $paraph   = $_POST['paraph'];
          $code     = $_POST['code'];
          $sub    = $_POST['sub'];
    
      mysql_query("INSERT INTO `lesson`(`id`, `title`, `subtitle`, `paraph`, `code`, `sub`) VALUES ('','$title','$subtitle','$paraph','$code','$sub')");
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

          <h3><input type="text" class="form-control" placeholder="Title" name="title" ></h3>
          <p><!-- Subtitle !-->          
              <input type="text" class="form-control" name="subtitle" placeholder="subtitle" >
          </p>

           <p><!-- Subtitle !-->          
              <input type="text" class="form-control" name="sub" placeholder="sub" >
          </p>

          <p> <!-- paragapgh !-->
            <textarea class="form-control" name="paraph" placeholder="Paragraph"></textarea>
          </p>
          
          <p><textarea class="form-control" name="code" placeholder="Code"></textarea></p>
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

