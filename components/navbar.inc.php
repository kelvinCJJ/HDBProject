<?php
session_start();

$username = null;
if (isset($_SESSION['username']))
    $username = $_SESSION['username']?$_SESSION['username'] :"test";
    //header('location:login.php');

if (isset($_GET['logout'])) {
    unset($username);
    session_destroy();
    header('location:home.php');
}
?>
<header class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="container flex-wrap ">
        <a class="navbar-brand" href="#"><img src="img/logo.png" width="80" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link"  href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bto.php">BTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resale.php">Resale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.php">FAQ</a>
                </li>
            </ul>
            <?php
            if (is_null($username)) {
                echo "<a  href='login.php' class='btn' style='color:white;background-color:#E03D4E;'>Login</a>";
            } else {
                echo "<div >               
                <i class=' bi bi-person-circle'></i>
                <span class='navbar-light'> " . $username . " </span>
                <a href='index.php?logout=". $username."?' class='ms-2 btn btn-secondary'><i class='bi bi-box-arrow-right'></i> Sign out</a></li>                
                </div>";
            }
            ?>

        </div>


    </nav>
</header>