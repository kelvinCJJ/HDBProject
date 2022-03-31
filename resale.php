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
     $selectu = mysqli_query($conn, "SELECT * FROM application WHERE UserID = '$userid' AND ResaleID IS NOT NULL")
            or die($conn->error);

    if (mysqli_num_rows($selectu) > 0) {
        $message[] = 'applied';
    }
}
?>
<body>
    
<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
    <?php
    if(isset($message))
    {
        if (strpos($message, "applied")) {
         echo "<button name='submit' type='submit' class='btn btn-secondary ms-auto' disabled>
        Applied </button>"; 
        } else {
             echo "<button name='submit' type='submit' class='btn btn-primary ms-auto'>Apply Now </button>";}
    }
    ?>
</form>

<div class="container">    
<h1>Resale flats</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach($row as $data)
    {
        echo "<div class='col'>
    <div class='card shadow-lg h-100'>
      <img src='".$data[9]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>".$data[1]." (".$data[4].")</h5>
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
