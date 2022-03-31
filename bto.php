<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

 $select = mysqli_query($conn, "SELECT * FROM bto")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_all($select);
    } else {
        echo 'error';
    }
?>
<div class="container">
<h1>Build To Order flats(BTO)</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach($row as $data)
    {
echo "<div class='col'>
      <div class='card shadow-lg h-100'>
      <img src='".$data[5]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>".$data[1]."</h5>
        <p class='card-text'>
        <h6>Available room types:</h6><p>".$data[4].
        "</p><h6>No. of units available</h6><p>".$data[3]."<a href='/btodetails.php?btoid=".$data[0]."' class='btn  btn-danger float-end'>Read more</a></p>
        </p>        
      </div>
    </div>
  </div>";
    }
    ?>
</div>



</body>
<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
