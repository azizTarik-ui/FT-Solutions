<?php
session_start();
include 'config.php';

$sql_private = "select featured_products from private";
$result_private = mysqli_query($conn, $sql_private);
$row_private = mysqli_fetch_assoc($result_private);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FT Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
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
    <main>
        <section class="container slider mt-3">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner banner">
                    <div class="carousel-item active">
                        <img src="../images/slider1.png" class="img-fluid d-block sliders" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slider2.png" class="img-fluid d-block sliders" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/slider3.png" class="img-fluid d-block sliders" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section>
            <h3 class="mt-3 text-center" style="color: #090936;">Our Featured Products</h3>
        </section>
    </main>
    <section class="container">
        <div class="row d-flex-justify-content-center align-items-center">
            <?php
            $sql = "select * from products order by product_id LIMIT " . $row_private['featured_products'];
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-md-6 col-lg-4 col-sm-12 d-flex justify-content-center ">
                        <div class="card mt-5 mb-5 border-0 shadow p-3" style="width: 18rem; height: 25.5rem">
                            <div>
                                <img class=img-fluid src="../db_images/<?php echo $row["product_image"]; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h6 class="card-title"><?php echo $row["product_name"]; ?></h6>
                                <h4 class="card-text" style="color: gray;">Tk. <?php echo $row["product_price"]; ?></h4>
                                <?php echo '<a href="productDetails.php?id=' . $row['product_id'] . '" class="stretched-link"></a>' ?>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
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