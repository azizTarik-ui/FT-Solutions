<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}

include 'config.php';

$userid = $_SESSION["userid"];

if (isset($_POST['save'])) {

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $sql_username = "update users set username = '$username' where userID = '$userid'";
        $result_username = mysqli_query($conn, $sql_username);
    }
    if (isset($_POST['password']) && isset($_POST['confirm_password'])) {
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if ($password === $confirm_password) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql_pass = "update users set password = '$hash' where userID = '$userid'";
            $result_pass = mysqli_query($conn, $sql_pass);
        } else {
            echo "<script>alert('Passwords do not match. Please try again.');</script>";
        }
    }
}

if (isset($_POST['logout'])) {
    header("location: logout.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">

    <title>user-profile</title>
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
    <section class="container mb-5">
        <?php
        $query = "select username from users where userID = '$userid'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <h1 class="text-center mt-5" style="color:rgba(5, 5, 83, 0.87)">Hello <?php echo $row["username"]; ?></h1>
        <?php
            }
        }
        ?>
        <div class="container mt-4">
            <form action="" method="post">
                <?php

                $sql = "select * from users where userID='$userid'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                ?>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="Email" class="form-control" value="<?php echo $row['Email']; ?>" disabled required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" name="confirm_password" class="form-control" value="<?php echo $row['password']; ?>" required>
                        </div>

                <?php
                    }
                }

                ?>
                <button type="submit" name="save" class="btn btn-primary btn-lg">Update</button>
                <button type="submit" name="logout" class="btn btn-secondary btn-lg">Logout</button>
            </form>
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