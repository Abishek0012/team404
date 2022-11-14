<?php include "connection.php"; 

// initializing variables
$username = "";
$email    = "";
$password = "";
$confirm_password = "";
$errors = array(); 

// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['btnSubmit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $confirm_password) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE Username='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (Username, Email, Password) 
  			    VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	//$_SESSION['username'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
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
      <div class="reg-form-box">
        <div class="reg-button-box">
          <div id="reg-btn"></div>
          <button type="button" class="toggle-btn" onclick="login()">
            Log In
          </button>
          <button style="background: linear-gradient(to right, #ff105f, #ffad06);
  border-radius: 30px;
  transition: 0.5s; " type="button" class="toggle-btn" onclick="register()">
            Register
          </button>
        </div>
        <br />
        <h3 id="text">Get Started</h3>
        <form
          id="register"
          class="input-group"
          action="register.php"
          method="POST"
        >
          <input
            type="text"
            class="input-field"
            placeholder="Username"
            name="username" 
            value="<?php echo $username; ?>"
          
          />
          <input
            type="email"
            class="input-field"
            placeholder="Email Id"
            name="email" 
            value="<?php echo $email; ?>"
          
          />
          <input
            type="password"
            class="input-field"
            placeholder="Password"
            id="pa-input"
            name="password" 
            value="<?php echo $password; ?>"
          
          />

          <div class="eye" onclick="myFunc()">
            <i id="hide" class="fa-solid fa-eye"></i>
            <i id="hidee" class="fa-solid fa-eye-slash"></i>
          </div>

          <input
            type="password"
            class="input-field"
            placeholder="Confirm Password"
            id="pas-input"
            name="confirm_password" 
            value="<?php echo $confirm_password; ?>"
          
          />
          <div class="eye" onclick="myFun()">
            <i id="hide3" class="fa-solid fa-eye"></i>
            <i id="hide4" class="fa-solid fa-eye-slash"></i>
          </div>
          
          <div class="reg-box">
            <input type="checkbox" class="check-box" required /><span
              >I agree to the terms & conditions</span
            >
            
            <button type="submit" name="btnSubmit" class="reg-submit-btn">Register</button>
          </div>

          <!-- <div class="error-msg"> -->
        <?php  if (count($errors) > 0) : ?>
          <div class="error">
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
