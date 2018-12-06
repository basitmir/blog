<?php
  require 'header.php';
  require 'config.php';
  ?>
  <style>
  .jumbotron{
  background-image: url("../imgs/blog 3.jpg");
  background-size: cover;
  height:auto;
  
  }
  </style>
  
<div class="bg">




<div class="row">
  <div class="leftcolumn">
  <div class="card bg-light text-info ">
  <form name="myForm" method="post" action="">
  <div class="form-group">
<input type="name" class="form-control blogname card-header" name="title" id="blogname" 
required placeholder="Enter Title">
<?php


?>
</div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="name" class="form-control" id="exampleFormControlInput1" required name="name"placeholder="Basit Mir">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput2" required name="email" placeholder="myemail@something.com">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Start Blogging</label>
    <textarea type="comment" class="form-control" id="exampleFormControlTextarea1" required  name="content" rows="10"></textarea>
  </div>
  </div>
  <p class="lead">
    <button type="submit" class=" form-control btn  btn-secondary" name="submit"  role="button">PUBLISH</button>
  </p>

  <?php


  if (isset($_POST['submit'])){
    
    // echo "<script type='text/javascript'> alert('BLOG PUBLSIHED');</script>";
   

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

    $query="INSERT INTO  main (title,name,email,content,date,time)  VALUES ('{$title}','{$name}', '{$email}', '{$content}',NOW(),NOW())";
    $result= mysqli_query($connection, $query);
    if($result){ ?>
      <!-- echo "<script type='text/javascript'> alert('BLOG PUBLSIHED');</script>"; -->
       <!-- header("Location:blogs.php"); -->
      <script type="text/javascript">
alert("BLOG PUBLISHED");
location="blogs.php";
</script><?php
       
    }
    else{
      die("Database query failed" . mysqli_error($connection));
     
    }
   
   
  }
  
 
  
 
?>
</form>




  <div class="jumbotron">
  <h3 class="  display-4"><b><i style="color:white; text-shadow: 6px 6px 8px black;">RECENT BLOGS</i></b></h3>
 </div>

      <?php

$query= "SELECT * FROM main";
$result=mysqli_query($connection, $query);
if (!$result){
  die("Database query failed");
}
while($row = mysqli_fetch_assoc($result)){
   


?>
    <div class="card">
      <h2 style="color:brown; text-transform:uppercase"> <?php echo $row["title"]?> </h2>
      <h6 style="color:gray;text-transform:capitalize;text-decoration:underline"> <?php echo $row["name"]  ." posted at " . date("g:i a", strtotime( $row["time"])). ",".
      " ". $row["date"];?></h6>
      
      <p> <?php echo $row["content"]?></p>
    </div>
<?php }
mysqli_close($connection);?>
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
