<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['username'] = $row['Username'];
        $_SESSION['userid'] = $row['UserId'];
        header('location:index.php');
    } else {
        $message = 'Invalid email or password';
    }
}

?>
<section class="h-100">
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5">
                <img src="/img/logo.png" alt="logo" width="100">
            </div>
            <div class="card my-5 shadow-lg">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                    <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                        <?php
                        if (isset($message)) {
                                    echo '<div class="alert alert-danger" role="alert" onclick="this.remove()">' . $message . '</div>';
                                
                            
                        }
                        ?>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 w-100">
                                <label class="text-muted" for="password">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <button name="submit" type="submit" class="btn btn-primary ms-auto">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3 border-0">
                    <div class="text-center">
                        Don't have an account? <a href="register.php" class="text-dark">Create One</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<script>
    (function () {

        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
    })()
</script>-->
<script src="js/bootstrap.min.js"></script>
</body>
<?php require('components/footer.inc.php'); ?>