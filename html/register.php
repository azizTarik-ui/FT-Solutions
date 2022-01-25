<?php
    include 'config.php';
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $email = $_POST["Email"];
    $password = $_POST["password"];
    $cpassword = $_POST["confirm_password"];
    // $exists=false;

    // Check whether this username exists
    $existSql_username = "SELECT * FROM users WHERE username = '$username'";
    $existSql_email = "SELECT * FROM users WHERE Email = '$email'";
    $result_username = mysqli_query($conn, $existSql_username);
    $result_email = mysqli_query($conn, $existSql_email);
    $numExistRows_username = mysqli_num_rows($result_username);
    $numExistRows_email = mysqli_num_rows($result_email);
    if($numExistRows_username > 0 || $numExistRows_email > 0){
        // $exists = true;
        $showError = "Username or Email Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users ( username, Email, password) VALUES ('$username', '$email', '$hash')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
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
    <?php
    if($showAlert){
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