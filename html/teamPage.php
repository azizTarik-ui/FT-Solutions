<?php
include "config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FT Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/teamPage.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome/all.css">
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
    <section class="member-details">
        <div id="service" style="background-color:cyan">
            <div class="container">
                <h1 class=" text-center">Our Team Members</h1>
                <div class="row d-flex justify-content-center">
                    <?php
                    $query = "select * from team order by member_id";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <div class="col-md-4">
                                <div class="cardItem card border-0 shadow">
                                    <div class="text-center">
                                        <img src="../images/<?php echo $row["member_image"]; ?>" class="member-img" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $row["member_name"]; ?></h5>
                                        <p class="card-text text-center"><?php echo $row["member_designation"]; ?></p>
                                    </div>
                                    <div class="d-flex justify-content-center mb-5">
                                        <div ><a href="<?php echo $row["facebook"]; ?>"><img style="margin-left: 7px" src="../images/fb.png" alt="" srcset=""></a></div>
                                        <div ><a href="<?php echo $row["linkedin"]; ?>"><img style="margin-left: 7px" src="../images/li.png" alt="" srcset=""></a></div>
                                        <div><img style="margin-left: 7px" src="../images/skype.png" alt="" srcset=""></div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
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