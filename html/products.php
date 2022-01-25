<?php
session_start();
include 'config.php';
$sql_private = "select private_product from private";
$result_private = mysqli_query($conn, $sql_private);
$row_private = mysqli_fetch_assoc($result_private);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Products</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/products.css">
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
	<section class="container">
		<div class="row d-flex-justify-content-center align-items-center">
			<?php
			if (!isset($_SESSION['loggedin']))
				$query = "select * from products order by product_id LIMIT " . $row_private['private_product'];
			else
				$query = "select * from products order by product_id";
			$result = mysqli_query($conn, $query);
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