<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'An account with email ' . $email . ' already exists.';
    } else {
        mysqli_query($conn, "INSERT INTO users(Username,Email,Password) VALUES('$name','$email','$password')")
                or die('query error');
        $message[] = 'registered successfully';
        echo 'registed';
    }
}
?>
<section class="h-100">
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5">
                <img src="/img/logo.png" alt="logo" width="100">
            </div>
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>

                    <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                        <?php
                        if (isset($message)) {
                            foreach ($message as $message) {
                                if (strpos($message, "exist")) {
                                    echo '<div class="alert alert-danger" role="alert" onclick="this.remove()">' . $message . '</div>';
                                } else {
                                    echo '<div class="alert alert-success" role="alert" onclick="this.remove()">' . $message . '</div>';
                                }
                            }
                        }
                        ?>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                            <div class="invalid-feedback">
                                Name is required	
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="" required>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="cpassword">Confirm Password</label>
                            <input id="cpassword" type="password" class="form-control" name="cpassword" required>
                            <div class="invalid-feedback">
                                Confirm Password is required
                            </div>
                        </div>
                        <p class="form-text text-muted mb-3">
                            By registering you agree with our terms and condition.
                        </p>

                        <div class="align-items-center d-flex">
                            <button type="submit" name="submit" class="btn btn-primary ms-auto">
                                Register	
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3 border-0">
                    <div class="text-center">
                        Already have an account? <a href="login.php" class="text-dark">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
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
</script>
<script src="js/bootstrap.min.js"></script>
</body>
<?php require('components/footer.inc.php'); ?>