<?php
include "config.php";

if (isset($_POST["Name"]) && isset($_POST["Email"]) && isset($_POST["message"])) {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["message"];

    $sql = "insert into contact (name, email, message) values ('" . $name . "','" . $email . "','" . $message . "')";

    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-us</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/contactUs.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
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
    <section class="bg">
        <div class="container">
            <h2 class="text-center p-3">We'd Love to Hear From You</h2>
            <p class="text-center p-3">Our team is happy to answer your sales questions. Fill out <br>the form and we be
                in
                touch as soon as possible.</p>
        </div>
    </section>
    <section class="container mb-3">
        <h1 class="text-center mt-5" style="color:rgba(5, 5, 83, 0.87)">Have Some Questions?</h1>
        <div class="row container d-flex">
            <aside class="col-md-7">
                <img class="img-fluid contactUsImg" src="../images/contactUs.svg" alt="" srcset="">
            </aside>
            <aside class="col-md-5 card p-3 mt-4">
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="name" name="Name" placeholder="Name" class="form-control mb-2">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <textarea name="message" class="form-control mb-2" placeholder="Write The Message"></textarea>
                        <label for="floatingTextarea">Your Questions...</label>
                    </div>
                    <br>
                    <button type="submit" name="btn-send" class="btn btn-outline-danger">send</button>
                </form>
            </aside>
        </div>
    </section>
    <footer>
        <?php
            include "footer.php";
        ?>  
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>