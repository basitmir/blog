<?php
  require 'header.php'
   
  ?>
<div class="bg">




<div class="row">
  <div class="leftcolumn">
  <div class="card">
  <form method="post">
  <div class="form-group">
<input type="name" class="form-control blogname" name="title" id="blogname" required placeholder="Title">
<?php


?>
</div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" required name="name"placeholder="Basit Mir">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput2" required name="email" placeholder="iammirbasit@gmail.com">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Start Blogging</label>
    <textarea type="comment" class="form-control" id="exampleFormControlTextarea1" required  name="content" rows="8"></textarea>
  </div>
  </div>
  <p class="lead">
    <button type="submit" class=" form-control btn btn-outline-secondary btn-lg" name="submit"  role="button">PUBLISH</button>
  </p>

  <?php


  if (isset($_POST['submit']) && ($_POST['title'] != "") && ($_POST['name'] != "")
  && ($_POST['email'] != "") && ($_POST['content'] != "")  ){
    echo "<script type='text/javascript'> alert('BLOG PUBLSIHED');</script>";
   

    if(isset($_POST['title'])){
      $title=$_POST['title'];
    }

    if(isset($_POST['name'])){
      $name=$_POST['name'];
    }
    if(isset($_POST['email'])){
      $email=$_POST['email'];
    }
    if(isset($_POST['content'])){
      $content=$_POST['content'];
    }
  }
  else{
    echo "<script type='text/javascript'> alert('Please fill out all the details');</script>";
  }
  

?>
</form>

  <div class="jumbotron">
  <h3 class=" jumbotron1 display-4"><b><i>RECENT BLOGS</i></b></h3>
 </div>


    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      
      <p>Some text..</p>
    </div>

  </div>
  <div class="rightcolumn">
    
    <div class="card">
      <h3>Most Popular</h3>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div><br>
      <div class="fakeimg"></div>
    </div>
    
  </div>
</div>

</div>



<?php
  require 'footer.php'
  ?>
