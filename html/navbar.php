<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top navbar">
    <div class="container-fluid">
        <div class="shop-name">
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <?php
                $query = "select * from navbar order by page_id";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row_navbar = mysqli_fetch_array($result)) {
                ?>
                        <li class="nav-item">
                            <button type="button" class="nav-btn btn btn-outline-dark">
                                <a class="nav-link active text-white" aria-current="page" href="<?php echo  $row_navbar["page_link"]; ?>"><?php echo  $row_navbar["page_name"]; ?></a>
                            </button>
                        </li>
                <?php
                    }
                }
                ?>
                <li>
                    <a href="teamPage.php">
                        <i class="team-icon fas fa-user-friends rounded-circle float-end" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Team page"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="userProfile.php">
                        <img class="user-icon" src="../images/user.png" alt="user" data-bs-toggle="tooltip" data-bs-placement="bottom" title="User Profile">
                    </a>
                </li>
        </div>

        </ul>
    </div>
    </div>
</nav>
</div>
</header>