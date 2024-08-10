<?php include 'stickyNav.php';?>
<?php 
session_start();

// initializing variables
$username = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'photographer_db');

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
      exit(); // Added exit() to prevent further code execution
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
  <style type="text/css">
    * {
  margin: 20px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;

}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: black;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin-bottom: 20px;
  margin-top: 0px;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 20px auto;
  text-align: center;

}



.input-group .btn {
  margin: 5px;
  width: 50%;
  text-align: center;
}

.input-group .btn.admin {
  background: #333;
}

.input-group .btn.admin:hover {
  background: #555;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: black;
  border: none;
  border-radius: 5px;
  align-items:center;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;

  </style>
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <div class="input-group">
  <a href="admin-login.php">
    <button type="button" class="btn" name="admin_login">Admin Login</button>
  </a>
</div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>

   <!---Footer--->
  <?php include 'footer.php';?>
</body>
</html>