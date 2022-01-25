<?php
include "config.php";
$sql = "select * from about_us";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../css/aboutUs.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <section class="about-us" style="background-image:url(../images/Wave.png); background-repeat:no-repeat; overflow:hidden; width: 100%">
        <div class="row mt-4 d-flex container" style="overflow:hidden">
            <aside class="col-md-7">
                <img class="img-fluid" src="../images/aboutUs.png" width="500" alt="">
            </aside>
            <aside class="row  mt-5 col-md-5">
                <div class="p-2 borderRadius shadow d-flex justify-content-center align-items-center">
                    <div>
                        <img class="img-fluid" src="../images/icon/<?php echo $row["image1"]; ?>" width="70" alt="">
                    </div>
                    <div class="details">
                        <h4>Find the Perfect Gadget</h4>
                        <small>
                            <p>"<?php echo $row['text1']; ?>"</p>
                        </small>
                    </div>
                </div>
                <div class="p-2 borderRadius shadow mt-3 d-flex justify-content-center align-items-center">
                    <div>
                        <img class="img-fluid" src="../images/icon/<?php echo $row["image2"]; ?>" width="70" alt="">
                    </div>
                    <div class="details">
                        <h4>Free Exchanges</h4>
                        <small>
                            <p>"<?php echo $row['text2']; ?>"</p>
                        </small>
                    </div>
                </div>
                <div class="p-2 borderRadius shadow d-flex mt-3 justify-content-center align-items-center mb-5">
                    <div>
                        <img class="img-fluid" src="../images/icon/<?php echo $row["image3"]; ?>" width="70" alt="">
                    </div>
                    <div class="details">
                        <h4>Contact Our Seller</h4>
                        <small>
                            <p>"<?php echo $row['text3']; ?>"</p>
                        </small>
                    </div>
                </div>
            </aside>
        </div>
    </section>
    <section>
        <h2 class="service-heading text-center mt-5">Our Services</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="cardItem card shadow border-0">
                        <!-- <div class="text-center" style="position:relative; bottom:3rem">
                            <img src="../images/<?php echo $row["image4"]; ?>" class="topIcon rounded-circle" alt="...">
                        </div> -->
                        <div class="card-body">
                            <h5 class="card-title text-center">Exciting Offers for Users</h5>
                            <p class="card-text text-center">"<?php echo $row['text4']; ?>"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cardItem card shadow border-0">
                        <!-- <div class="text-center">
                            <img src="../images/<?php echo $row["image5"]; ?>" class="topIcon rounded-circle" alt="...">
                        </div> -->
                        <div class="card-body">
                            <h5 class="card-title text-center">All Types of PC Parts</h5>
                            <p class="card-text text-center">"<?php echo $row['text5']; ?>"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cardItem card shadow border-0">
                        <!-- <div class="text-center">
                            <img src="../images/<?php echo $row["image5"]; ?>" class="topIcon rounded-circle" alt="...">
                        </div> -->
                        <div class="card-body">
                            <h5 class="card-title text-center">Genuine Products</h5>
                            <p class="card-text text-center">"<?php echo $row['text6']; ?>"</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <h2 class="service-heading text-center mt-5 mb-3">Our Mission</h2>
        <div class=" mt-6">
            <p>"<?php echo $row['text7']; ?>"</p>
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