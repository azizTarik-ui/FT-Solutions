<?php
include 'config.php';
$productid = $_GET["id"];
if (!$productid) {
    header("location:products.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/productDetails.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <title>Product Details</title>
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
    <section>
        <?php
        $query = "select * from products where product_id = '$productid'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <div class="card mb-3  border-0 container" style="max-width: 100rem;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../db_images/<?php echo $row["product_image"]; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body mt-5 shadow-lg">
                                <h2 class="card-title" style="color: #1d065cef"><?php echo $row["product_name"]; ?></h2>
                                <hr>
                                <h3 class="card-title">Description</h3>
                                <p class="card-text"><?php echo $row["product_description"]; ?></p>
                                <div class="d-flex">
                                    <h4 class="d-flex">Price:</h4>
                                    <p class="fs-5">&nbsp;Tk. <?php echo  $row["product_price"]; ?></p>
                                </div>
                                <div class="d-flex">
                                    <h4 class="d-flex">Warranty:</h4>
                                    <p class="fs-5">&nbsp;<?php echo $row["product_warranty"];  ?> Years</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <footer>
            <?php
            include "footer.php";
            ?>
    </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>