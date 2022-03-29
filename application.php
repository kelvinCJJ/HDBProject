<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');
if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
}
$select = mysqli_query($conn, "SELECT * FROM application,resale WHERE application.ResaleId = resale.ResaleId AND application.UserId = $userid")
        or die($conn->error);
?>
<div class ="container my-5">
    <h1>My Applications</h1>

    <div class ="container">

    <?php
    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_all($select);
        echo "<div class='row row-cols-1 row-cols-md-3 g-4 my-5'>";
        foreach ($row as $data) {
            echo "<div class='col'>
                    <div class='card shadow-lg h-100'>
                      <img src='" . $data[13] . "' class='card-img-top' alt=''>
                      <div class='card-body'>
                        <h5 class='card-title'>" . $data[5] . " (" . $data[8] . ")
                                </h5>
                        <p class='card-text'>" . $data[10] .
                                "<br>S$" . $data[6] .
                                "</p><h5>Date of application</h5><a href='/resaledetails.php?resaleid=". $data[4] .
                                "' class='btn btn-danger float-end'>Read more</a><p>" . $data[3] .
                                "</p>
                       </div>
                    </div>
                  </div>";
            }
            echo "</div>";
        } else {
            echo '<h3 class="my-5" style="text-align:center;">No applications</h3>';
        }
        ?>
    </div>
</div>

</body>
<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
