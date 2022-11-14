<?php include "connection.php";

if (isset($_SESSION['username'])) {
  	//$_SESSION['msg'] = "You must log in first";
  	header('location: feature.php');
  }

// initializing variables
$username = "";
$password = "";
$errors = array(); 

// LOGIN USER
if (isset($_POST['btnSubmit2'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
    //echo $password;
  	$query = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  //$_SESSION['success'] = "You are now logged in";
  	  header('location: feature.php');
  	}else {
  		array_push($errors, "Wrong username or password");
  	}
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome To Readssy</title>
    <link rel="stylesheet" href="./styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="one">
      <div class="log-form-box">
        <div class="log-button-box">
          <div id="log-btn"></div>
          <button type="button" class="toggle-btn" onclick="login()">
            Log In
          </button>
          <button type="button" class="toggle-btn" onclick="register()">
            Register
          </button>
        </div>
        <br />
        <h3 id="text">Get Started</h3>
        <form id="login" class="input-group" action="login.php" method="POST">
          <input
            type="text"
            class="input-field"
            placeholder="Username"
            name="username"
          
          />
          <input
            type="password"
            class="input-field"
            placeholder="Password"
            name="password"
            id="pass-input"
          
          />
          <div class="eye" onclick="myFunction()">
            <i id="hide1" class="fa-solid fa-eye"></i>
            <i id="hide2" class="fa-solid fa-eye-slash"></i>
          </div>

          <!-- <input type="checkbox" class="check-box" /><span
            ><p>Remember Password</p></span
          > -->
          <button type="submit" name="btnSubmit2" class="submit-btn">Log in</button>
          <!-- <div class="fog-pass"><a href="/">Forgot password?</a></div> -->

        <!-- <div class="error-msg"> -->
        <?php  if (count($errors) > 0) : ?>
          <div class="log-error">
            <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
            <?php endforeach ?>
          </div>
        <?php  endif ?>

        </form>
      </div>
    </div>
    <script src="login.js"></script>
  </body>
</html>
