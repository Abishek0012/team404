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
  
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a7dbdcfa2b.js" crossorigin="anonymous"></script>
  <title>Readssy</title>
</head>
<body>

<div style="height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url(./images/book.jpeg); position:absolute; background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Readssy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <!-- <a class="nav-link" aria-current="page" href="#">Home</a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="feature.php">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact us</a>
          </li>
        </ul>
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
      </div>
    </div>
  </nav>

  <style>
    .checked {
        color: orange;
    }
    .container {
      margin-top: 50px;
    }
  </style>

  <div class="container">
    <div class="row">
            <div class="card" style="width: 18rem;" >
                <img src="./images/book-2.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Frost Arch</h5>
                  <p class="card-text">A Fire Mage who lives in a world where Humans are slaves, Mages are in charge, and how you live depends on how much power you have. </p>
                </div>
            </div>
            <div class="card" style="width: 18rem;" >
                <div class="card-body">
                  <h5 class="card-title">Catherine Smith</h5>
                  <p class="card-text">Eh, I like the premise of the book and it's a cute story (you'll love Hawthorne, Jack, and Raeven) but there are some problems with how the story is told..</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span><br><br><br>
                    <h5 class="card-title">Jason White</h5>
                  <p class="card-text">I liked the plot, I liked the characters. Normally that would mean a four- or five-star rating from me. However, I really think someone should have proofread this before putting it up in the kindle store. It was polluted with grammar and spelling errors.
                  </p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>




</html>