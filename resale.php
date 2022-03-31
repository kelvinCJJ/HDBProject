<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

$select = mysqli_query($conn, "SELECT * FROM resale")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_all($select);
    } else {
        echo 'error';
    }
    if (isset($_SESSION['userid']))
    {
     $userid = $_SESSION['userid'];
     $selectu = mysqli_query($conn, "SELECT * FROM application WHERE userid = '$userid' AND resaleid = '1'")
            or die($conn->error);

    if (mysqli_num_rows($selectu) > 0) {
        $message[] = 'applied';
    }
    
    if (isset($_POST['submit'])) {

    $uid = mysqli_real_escape_string($conn, $userid);
    $rid = mysqli_real_escape_string($conn, "1");
    $date = mysqli_real_escape_string($conn, date("y/m/d"));
    mysqli_query($conn, "INSERT INTO application(UserId,ResaleId,Date) VALUES('$uid','$rid',NOW())")
            or die('query error');
    $message[] = 'Your application was successful';
    }
}
?>
<div class="container">
    <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                        <?php
                        if (isset($message)) {
                             foreach ($message as $message) {
                                if (strpos($message, "succesful")) 
                                    echo '<div class="alert alert-success" role="alert" onclick="this.remove()">' . $message . '</div>';
                             }                           
                        }
                        ?>
                        <input id="userid" type="text" class="form-control" name="userid" value="<?php $userid?>" hidden>
                         <input id="resaleid" type="text" class="form-control" name="resaleid" value="1" hidden>
                            <?php
                            if(isset($message)){
                                if (strpos($message, "applied")) {
                                   echo "<button name='submit' type='submit' class='btn btn-primary ms-auto'>
                                Apply Now </button>";
                                } else {
                                    echo "<button name='submit' type='submit' class='btn btn-secondary ms-auto' disabled>
                                Applied </button>";
                                }
                            }
                            ?>
    </form>
<h1>Resale flats</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach($row as $data)
    {
        echo "<div class='col'>
    <div class='card shadow-lg h-100'>
      <img src='".$data[9]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>".$data[1]." (".$data[4].")
            
                </h5>
        <p class='card-text'>".$data[6].
            "<br>S$".$data[2].
            "<a href='/resaledetails.php?resaleid=".$data[0]."' class='btn btn-danger float-end'>Read more</a></p>
        </div>
    </div>
  </div>";
    }
    ?>
</div>
</div>


</body>
<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
