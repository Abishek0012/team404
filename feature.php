<?php
  include "connection.php";

  if (!isset($_SESSION['username'])) {
  	//$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css" />
  <script src="https://kit.fontawesome.com/a7dbdcfa2b.js" 
    crossorigin="anonymous"></script>
    
</head>
  <title>Readssy</title>
</head>
<body>

  <div class="two" >
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Readssy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <!-- <a class="nav-link" aria-current="page" href="index.php">Home</a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact us</a>
          </li>
        </ul>


      <a href="logout.php" class="btn btn-outline-danger">Logout</a>
        
      </div>
    </div>
  </nav>

  

  <div class="container">
    <br>
    <br>
    <br>
    <div class="row" style="height: 589px;">
      <div class="col-sm">
        <div class="card" style="width: 18rem; height: 37rem;">
          <img src="./images/book-1.jpg" class="card-img-top" style="height: 22rem;"  alt="...">
          <div class="card-body">
            <h5 class="card-title">What Doesn't Kill You</h5>
            <p class="card-text">What Doesn't Kill You is the riveting account of a young journalist's awakening to chronic illness, weaving together personal story and reporting to shed light on living with an ailment forever.</p>
            <a href="review1.php" class="btn btn-primary" style="position: relative; bottom: 18px;" >Read Review </a>
          </div>
        </div>
      </div> 
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="./images/book-2.jfif" class="card-img-top" style="height: 350px;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Frost Arch</h5>
            <p class="card-text">A Fire Mage who lives in a world where Humans are slaves, Mages are in charge, and how you live depends on how much power you  have. </p>
            <a href="review2.php" class="btn btn-primary" style="position: relative; top: 5px;">Read Review</a>
          </div>
        </div>
      </div>

      <div class="col-sm" style="height: 38rem;">
        <div class="card" style="width: 18rem; ">
          <div style="height: 586px;">
          <img src="./images/book-3.jfif" class="card-img-top" style="height: 22rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Wicked Like A Wildfire</h5>
            <p class="card-text">17-year-old twin sisters with magical abilities who set out to learn the truth behind their magic.</p>
            <a href="review3.php" class="btn btn-primary" style="position: relative; top: 47px;">Read Review</a>
          </div>
        </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>



    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div style="height: 540px;">
          <img src="./images/book-4.jfif" class="card-img-top" style="height: 22rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="position: relative; bottom: 10px;">Bleak Expectations</h5>
            <p class="card-text" style="position: relative; bottom: 15px;">Bleak Expectations is the story of young Pip Bin as he tries to make his way in a world made all horrible by the machinations.</p>
            <a href="review4.php" class="btn btn-primary" style="position: relative; bottom: 20px;">Read Review</a>
          </div>
          </div>
        </div>
      </div>

      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div style="height: 540px;">
          <img src="./images/book-5.jfif" class="card-img-top" style="height: 22rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Migration of Birds</h5>
            <p class="card-text"> When birds migrate: Movements of species and groups.</p>
            <a href="review5.php" class="btn btn-primary" style="position: relative; top: 26px;">Read Review</a>
          </div>
          </div>
        </div>
      </div>

      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <div style="height: 540px;">
          <img src="./images/book-6.jpg" class="card-img-top" style="height: 22rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">The Gallery Of Vanished Husbands</h5>
            <p class="card-text">A moving story of family and a life-long love affair in 1950s London.</p>
            <a href="review6.php" class="btn btn-primary">Read Review</a>
          </div>
          </div>
        </div>
      </div>

    </div>
    <br>
    <br>
    <br>

    <div class="row">

      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="./images/book-7.jfif" class="card-img-top" style="height: 22rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">The House</h5>
            <p class="card-text">This horror novel asks the question of what you will do if the place you called home became your worst nightmare.</p>
            <a href="review7.php" class="btn btn-primary">Read Review</a>
          </div>
        </div>
      </div>

      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="./images/book-8.jfif" class="card-img-top" style="height: 22rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">The Famous Five</h5>
            <p class="card-text">The Famous Five is a series of children's adventure novels and short stories written by English author Enid Blyton.</p>
            <a href="review8.php" class="btn btn-primary">Read Review</a>
          </div>
        </div>
      </div>

      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="./images/book-9.jfif" class="card-img-top" style="height: 22rem;" alt="...">
          <div class="card-body">
            <h5 class="card-title">The War Of Swords</h5>
            <p class="card-text">The War of Swords is action-packed as the title implies, but the action doesn't take away from the emotional impact of the story</p>
            <a href="review9.php" class="btn btn-primary">Read Review</a>
          </div>
        </div>
      </div>

    </div>
    <br>
    <br>
    <br>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>