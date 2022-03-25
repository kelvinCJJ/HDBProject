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
?>
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach($row as $data)
    {
    echo "<div class='col'>
    <div class='card h-100'>
      <img src='".$data[9]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>".$data[1]."</h5>
        <p class='card-text'>".$data[6].
            "<br>".$data[2].
            "<br>".$data[4]." unit</p>
        <div class='card-footer'><</div>
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
