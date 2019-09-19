<?php include('layouts/user_header.php') ?>

    <div class="main">
        <main class="main-section p-3">
            <div class="container">
                <div class="dashboardpage bg-white my-5 p-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="welcome-message">
                                <h3>Welcome <?php echo $fullname ?></h3>
                                <p>You Have Successfully Logged Into Team Naijacrawls's Dashboard</p>
                                <p>I would have suggested you take a photo while you're here but ehhh... you can only
                                </p>
                                <a  href="logout"class="btn btn-outline-primary logout-btn">Log Out</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="../assets/img/photo-session.svg" width="100%" alt="" class="d-none d-md-block">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

<?php include('../layouts/footer.php') ?>