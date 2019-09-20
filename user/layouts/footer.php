
<!--naijacrawl footer script-->


<footer class="bg-dark">
    <?php
    if (!$user->is_logged_in()) {
        ?>
        <div class="p-5">
            <div class="icons text-light text-center">
                <a href="login" class="foot-link login text-light btn">LOG IN</a>
                <a href="register" class="foot-link signup text-light btn">SIGN UP</a>
            </div>
        </div> 
        <?php
    }
    ?>





    <div class="footer-text p-3">
        <ul class="footer-links nav">
            <li class="nav-item">
                <a href="" class="nav-link text-light">Download the official app</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link text-light">Accecibility</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link text-light">Contact Us</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link text-light">Cookies</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link text-light">Terms of Use </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link text-light">Terms and Conditions of sale</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link text-light">Privacy Policy</a>
            </li>
        </ul>
        <span class="text-center text-light d-inline">
            <p>&copy TEAM NAIJACRAWL</p>
        </span>

    </div>

</footer>
<script type="text/javascript" src="../assets/js/jQuery.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 
</body>

</html>
