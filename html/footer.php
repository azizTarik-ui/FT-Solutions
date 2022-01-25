<?php
$sql = "select * from footer";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<section class="container">
    <div class=" d-flex justify-content-around" style="margin-left: 3rem;">
        <div class="">
            <i class="text-center fas fa-map-marker-alt fa-2x mt-3"></i>
            <p class="getInTouchText text-white mt-3 text-center"><?php echo $row['address']; ?></p>
        </div>
        <div class="">
            <i class="fas fa-headset fa-2x mt-3"></i>
            <p class="getInTouchText text-white mt-3" style="margin-left: 10px;"><?php echo $row['phone_no']; ?></p>
        </div>
        <div class="">
            <i class="fas fa-envelope fa-2x mt-3"></i>
            <p class="getInTouchText text-white mt-3" style="margin-left: 0px;"><?php echo $row['email']; ?></p>
        </div>
    </div>
</section>
    <p class="text-center" style="color: white">© Copyright 2021, FT Solutions, BD</p>
    <div class=" d-flex justify-content-center">
        <img class="mb-3" src="../images/facebook.png" alt="">
        <img class="mb-3" src="../images/instagram.png" alt="">
        <img class="mb-3" src="../images/twitter.png" alt="">
    </div>
    <!-- <i class="far fa-arrow-alt-circle-up fa-4x" style="margin-left: 1100px"></i> -->