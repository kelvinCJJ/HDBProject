<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

 $select = mysqli_query($conn, "SELECT * FROM bto LIMIT 4")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_all($select);
    } else {
        echo 'error';
    }
    $select = mysqli_query($conn, "SELECT * FROM resale  LIMIT 4")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_all($select);
    } else {
        echo 'error';
    }
?>

<h1>HomeGURU</h1><!<!-- What is the font used for homeguru  -->

<div class="search_wrap search_wrap_6 ">
<div class="search_box">
<input type="text" class="input" placeholder="search...">
<div class="btn">
<p>Search</p>
</div>
</div>
</div>


<div class ="container">
<h2>Available BTO </h2>
<p style = "text-align: right"><a href="bto.php"> View More > </a></p>
<div class="row row-cols-1 row-cols-md-4 g-4">
 <?php
    foreach($row as $data)
    {
        echo "<div class='col'>
      <div class='card shadow-lg h-100'>
      <img src='".$data[5]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>".$data[1]."<a href='/BTO1.php?btoid=".$data[0]."' class='btn  btn-danger float-end'>Read more</a></h5>
        <p class='card-text'>
        <h6>Available room types:</h6><p>".$data[4].
        "</p><h6>No. of units available</h6><p>".$data[3]."
        </p></p>
        
      </div>
    </div>
  </div>";
    }
    ?>
  </div>


<h2>Available Resale </h2>
<p style = "text-align: right"><a href="resale.php"> View More > </a></p>
<div class ="container">
<div class="row row-cols-1 row-cols-md-4 g-4">
    <?php
    foreach($row as $data)
    {
    echo "<div class='col'>
    <div class='card shadow-lg h-100'>
      <img src='".$data[9]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>".$data[1]." (".$data[4].")
            <a href='/resaledetails.php?resaleid=".$data[0]."' class='btn btn-danger float-end'>Read more</a>
                </h5>
        <p class='card-text'>".$data[6].
            "<br>S$".$data[2].
            "<br></p>
        </div>
    </div>
  </div>";
    }
    ?>
  </div>
</div>

<h2>Our Team </h2>
<ul class="image-list-small">
    <li>
        <p><strong>Bevan</strong></p>
    <img src="img/kai-seidler.jpg"/>
    </li>
    <li>
        <p><strong>Clifford</strong></p>
    <img src="img/kai-seidler.jpg"/>
    </li>
    <li>
        <p><strong>Chee Yong</strong></p>
    <img src="img/kai-seidler.jpg"/>
    </li>
    <li>
        <p><strong>Kelvin</strong></p>
    <img src="img/kai-seidler.jpg"/>
    </li>
    <li>
        <p><strong>Rachel</strong></p>
    <img src="img/kai-seidler.jpg"/>
    </li>
    <li>
        <p><strong>Yun Xin</strong></p>
    <img src="img/kai-seidler.jpg"/>
    </li>
</ul>
</div>

</body>
<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
