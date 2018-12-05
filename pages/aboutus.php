<?php
  require 'header.php'
   
  ?>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      margin:0;
  }
  
  .navbar {
   
    margin-bottom: 0px;
    
}
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #171a1c;
      font-size: 50px;
  }
  .logo {
      color: #171a1c;
      font-size: 200px;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
</head>


<div class="jumbotron center">
  <h1>Megne<b>Q</b></h1> 
  <p>We specialize in ......</p> 
  <form class="align-items-center">
    <div class="input-group">
      <input type="email" class="form-control" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-grey">Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2>
      <h4>We are highly experienced in offering offshore software development and project management. Some of our services include Strategic Technology Consulting, System Integration & Software Development, Enterprise Resource Planning (ERP), Client server application, E-commerce software development, Content management development, E-governance software, Web application development, E-Commerce development, Database application development.</h4>      
      <p>Today, we provide services, support and solutions to clients in various Industry verticals. A few from the industry verticals that we work closely are cutting edge technology companies, renown hospitality institutions, educational institutions, well-known gold merchants, garment houses, financial sectors.</p>
      <button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4><strong>MISSION:</strong>.....</h4>      
      <p><strong>VISION:</strong> .....</p>
    </div>
  </div>
</div>


<?php
  require 'footer.php'
   
  ?>

