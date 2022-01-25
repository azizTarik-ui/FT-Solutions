<?php
require_once "config.php";

$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT userID FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);

    if(empty(trim($_POST["Email"]))){
      $username_err = "Email cannot be blank";
  }
  else{
      $sql = "SELECT userID FROM users WHERE Email = ?";
      $stmt = mysqli_prepare($conn, $sql);
      if($stmt)
      {
          mysqli_stmt_bind_param($stmt, "s", $param_email);

          // Set the value of param username
          $param_email = trim($_POST['Email']);

          // Try to execute this statement
          if(mysqli_stmt_execute($stmt)){
              mysqli_stmt_store_result($stmt);
              if(mysqli_stmt_num_rows($stmt) == 1)
              {
                  $email_err = "This email is already taken"; 
              }
              else{
                  $email = trim($_POST['Email']);
              }
          }
          else{
              echo "Something went wrong";
          }
      }
  }

  mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($email_err)  && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_email = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            header("location: register.php");
            echo "<script>alert('Email is already taken');</script>";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <title>Register</title>
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
    <section  style="background-image: url(../images/reg-bg.png)">
        <div class="container row">
            <aside class="col-md-6 mt-5">
                <img class="img-fluid" src="../images/registration.png" alt="" srcset="" style="width:23rem; height: 26rem">
            </aside>
            <aside class="col-md-6 mt-5 mb-5">  
                <form action="" method="post" class="container card border-0 shadow p-5">
                <h2 class="mb-5">Sign Up</h2>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Username</label>
                            <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Enter an username" required>
                        </div>
                        <div class="form-group col-md-12 mt-2">
                            <label for="inputEmail4">Email</label>
                            <input type="text" class="form-control" name="Email" id="inputEmail4" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group col-md-6  mt-2">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Enter a password" required>
                    </div>
                    <div class="form-group col-md-6  mt-2">
                        <label for="inputPassword4">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="inputPassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="col-6 mt-3">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                    <div class="col-6 mt-3">
                        <a href="login.php"><button type="button" class="btn btn-primary">Sign In</button></a>
                        </div>
                </form>
            </aside>
        </div>
    </section>

    <footer>
        <?php
            include "footer.php";
        ?>  
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>

</html>