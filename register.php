<?php include('layouts/register_header.php') ?>
<body>
    <header class="bg-info">
        <nav class="navbar navbar-expand-md navbar-light p-4">
            <a class="navbar-brand text-light" href="#">TEAM NAIJACRAWL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-light">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="">News</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto text-light">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.html">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="register.html">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="main">
        <main class="main-section p-3">
            <div class="container">
                <div class="register-form bg-white p-3">
                    <div class="form-info bg-info text-light p-3 rounded-circle text-center">
                        <h3>Register</h3>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <label class="form-control-label" for="fname">
                                Full Name
                            </label>
                            <input type="text" class="form-control p-4" id="fname" name="fname" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="email">
                                Emaill
                            </label>
                            <input type="email" class="form-control p-4" id="email" name="email" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="password">
                                Password
                            </label>
                            <input type="password" class="form-control p-4" id="password" name="password" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="confirm-password">
                                Confirm Password
                            </label>
                            <input type="password" class="form-control p-4" id="confirm-password" name="cpassword" />
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn bg-info text-light p-2 rgt-btn">Register</button>
                        </div>
                        <div class="form-group text-center form-links">
                            <span>
                                <a href="login.html" class="text-primary">Log In</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

<?php include('layouts/footer.php') ?>