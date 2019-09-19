<?php include('layouts/register_header.php') ?>
 <!--oncontextmenu="return false;"-->
<body>
<div class="main">
    <main class="main-section p-3">
        <div class="container">
            <div class="register-form bg-white p-3">
                <div class="form-info bg-info text-light p-3 rounded-circle text-center">
                    <h3>Register</h3>
                </div>
                <form id="register">
                    <div class="form-group">
                        <label class="form-control-label" for="fname">
                            Full Name
                        </label>
                        <input type="text" class="form-control p-4" id="full_name" name="full_name" />
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="email">
                            Email
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
                        <input type="password" class="form-control p-4" id="confirm_password" name="confirm_password" />
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn bg-info text-light p-2 rgt-btn">Register</button>
                    </div>
                    <div class="form-group text-center form-links">
                        <span>
                            <a href="login" class="text-primary">Log In</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
</body>
<?php include('layouts/footer.php') ?>
