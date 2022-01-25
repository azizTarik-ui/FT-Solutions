<?php
session_start();
$login = false;
$showError = false;
if (isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
    $err = "Please enter username + password";
  } else {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
  }


  if (empty($err)) {
    $sql = "SELECT userid, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;

    if (mysqli_stmt_execute($stmt)) {
      mysqli_stmt_store_result($stmt);
      if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $userid, $username, $hashed_password);
        if (mysqli_stmt_fetch($stmt)) {
          if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["userid"] = $userid;
            $_SESSION["loggedin"] = true;
            $login=true;
            header("location: index.php");
          }
          else{
            $showError = "Invalid Credentials";
          }
        }
      }
    }
    else{
      $showError = "Invalid Credentials";
  }
  }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">

  <title>PHP login system!</title>
</head>

<body>
    <header class="d-flex">
        <div>
            <h2 class="logo mt-3">FT Solution</h2>
        </div>
        <div>
            <?php
                include "navbar.php";
            ?>
        </div>
    </header>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
    </div> ';
    }
    ?>
  <section class="container d-flex row">
    <aside class="col-md-7 mt-5">
      <img src="../images/login.png" alt="" srcset="" style="width: 20rem">
    </aside>
    <aside class=" col-md-5 mb-5 mt-5">
      <h2>Login Here</h2>
      <form action="" method="post" class="container card border-0 shadow  p-5">
        <div class="row">
          <div class=" col-md-12">
            <label for="inputEmail4">Username</label>
            <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Enter your username" required>
          </div>
          <br>
          <div class="form-group col-md-12">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Enter password" required>
          </div>
          <br>
          <div class="col-6 mt-3">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
          <br>
          <p class="mt-3">Don't  have an account?</p>
          <div class="col-6">
            <a href="register.php"><button type="button" class="btn btn-primary">Sign Up</button></a>
          </div>
      </form>
    </aside>
  </section>
  <footer>
        <?php
            include "footer.php";
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>