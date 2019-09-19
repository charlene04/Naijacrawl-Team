
<?php include('layouts/login_header.php') ?>

<div class="main">
    <main class="main-section p-3">
        <div class="container">
            <div class="login-form bg-white p-3">
                <div class="form-info bg-info text-light p-3 rounded-circle text-center">
                    <h3>Log In</h3>
                </div>
                <form id="login">
                    <div class="form-group">
                        <label class="form-control-label" for="email">
                            Emaill
                        </label>
                        <input type="email" class="form-control p-4" name="email" id="email" />
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="password">
                            Password
                        </label>
                        <input type="password" class="form-control p-4" name="password" id="password" />
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn bg-info text-light p-2 lgn-btn">Login</button>
                    </div>
                    <div class="form-group text-center form-links">
                        <span>
                            <a href="" class="text-dark">Forgot Password?</a>
                        </span>
                        <span>
                            <a href="register" class="text-primary">Create Account</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
<?php include('layouts/footer.php') ?>