<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

    $resaleid = $_GET["resaleid"];
    
    if (isset($_SESSION['userid'])){
     $userid = $_SESSION['userid'];
    
    
    $select = mysqli_query($conn, "SELECT * FROM application WHERE userid = '$userid' AND resaleid = '$resaleid'")
            or die($conn->error);
    
    if (mysqli_num_rows($select) > 0) {
        $message[] = 'applied';
    }
    
    if (isset($_POST['submit'])) {
    $uid = mysqli_real_escape_string($conn, $userid);
    $rid = mysqli_real_escape_string($conn, $resaleid);
    $date = mysqli_real_escape_string($conn, date("d/m/y"));
    mysqli_query($conn, "INSERT INTO application(UserId,ResaleId,Date) VALUES('$uid','$rid','$date')")
            or die('query error');
    $message[] = 'Your application was successful';
    }
    }
?>

<?php
if (isset($message)) {
    foreach ($message as $message) {
    if (strpos($message, "succesful")) 
    echo '<div class="alert alert-success" role="alert" onclick="this.remove()">' . $message . '</div>';}}
 ?>

<!DOCTYPE html>
<html>
<body>
    
<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
    <?php
    if (isset($message)) {
         foreach ($message as $message) {
            if (strpos($message, "succesful")) 
                echo '<div class="alert alert-success" role="alert" onclick="this.remove()">' . $message . '</div>';
         }                           
    }
    ?>
    
        <?php
        if(isset($message)){
            if (strpos($message, "applied")) {
               echo "<button name='submit' type='submit' class='btn btn-primary ms-auto'>
            Apply Now </button>";
            } else {
                echo "<button name='submit' type='submit' class='btn btn-secondary ms-auto' disabled>Applied </button>";
            }
        }
        ?>
         <button name='submit' type='submit' class='btn btn-primary ms-auto'>Apply Now </button>
</form>
    
<?php
    $resaleid = $_GET["resaleid"];

$select1 = mysqli_query($conn, "SELECT * FROM resale WHERE ResaleId = $resaleid ")
                or die($conn->error);

        if (mysqli_num_rows($select1) > 0) {
            $row1 = mysqli_fetch_all($select1);
        } else {
            echo 'error';
        }
        foreach ($row1 as $data1) {
?>
    
    <div class="container">    
        <div class ="housedetails">
        <div class ="housetitle">
            <h1><?php echo "<h1>".$data1[1]."</h1>"?>
            <div class="row">
            </div>
        </div> 
        <div class ="bto_pic">
                <?php
                $select = mysqli_query($conn, "SELECT * FROM resaleimages WHERE ResaleId = $resaleid")
                        or die($conn->error);
                if (mysqli_num_rows($select) > 0) {
                    $row = mysqli_fetch_all($select);
                } else {
                    echo 'error';
                }
                foreach ($row as $data) {
                    echo"<img src='" . $data[1] . "' >   ";
                }?>
            </div> 
        </div>    
        </div>
        <?php
        echo" <div class='extra-info'>
        <h1> <i class='fa-solid fa-house-user'></i> Address: " . $data1[6] . "</h1>
        <h2> <i class='fa-solid fa-bed'></i> Room Type: " . $data1[4] . "</h2>
        </div>
        <hr class='line'>
        <h3>Description: " . $data1[11] . "</h3>";}
        ?>
    </div>
</body>

<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
</html>