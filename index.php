
<?php
  require 'header.php'
  ?>



<!-- CAROUSEL CODE -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgs/blog 1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/blog 2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/blog 3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Jumbotron -->
 
<div class="jumbotron">
  <h1 class="display-4"><b><i>IBlog</i></b></h1>
  <p class="lead">A Way To <i>INSPIRE...</i><br><i>EMPOWER</i> And <i>EDUCATE</i> The World</p>
  <hr class="my-4">
  <p class="info">
  Share stories about life, food, travels and other adventures with your close friends and family.<br>
 <span class="subpara"><i> “It is all about you, your dreams and your aspirations.
It is a very flexible content publishing platform that allows you to showcase your passion, your knowledge, <br>your experience and skills, and find an audience that is looking 
for someone like you to help them out, inform them, educate them and/or entertain them.”</i></span>
</p>
<p class="lead">
    <a class="btn btn btn-outline-secondary btn-lg" href="blogs.php" role="button">Get Started</a>
  </p>
</div>
  <?php
    require 'footer.php'
    ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
</html>