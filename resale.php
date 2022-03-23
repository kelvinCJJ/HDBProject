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

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach($row as $data)
    {
        echo "<div class='col'>
    <div class='card h-100'>
      <img src='".$data[9]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>".$data[1]."</h5>
        <p class='card-text'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>";
    }
    ?>
</div>

<h1>Resale Flats</h1>

	<ul class="image-list-small">
    <li>
	<p class="btoname"><strong>Newton Circle(June 2021)</strong>
      <img src="img/resale/resale1.jpg">
            </a>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Jurong East(July 2021)</strong>
    <img src="img/resale/resale2.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Yishun Ring(August 2021)</strong>
      <img src="img/resale/resale3.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Commonwealth(January 2021)</strong>
      <img src="img/resale/resale4.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Geylang Bahru(December 2021)</strong>
      <img src="img/resale/resale5.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Bukit Batok(February 2021)</strong>
      <img src="img/resale/resale6.jpg"/>
      <div class="details">
      <p class="minsell">Minimum Selling Price:</p>
      <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
	<li>
	<p class="btoname"><strong>Bradell(June 2021)</strong>
      <img src="img/resale/resale7.jpg"/>
      <div class="details">
      <p class="minsell">Minimum Selling Price:</p>
      <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
	<li>
	<p class="btoname"><strong>Buangkok(March 2021)</strong>
      <img src="img/resale/resale8.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
</ul>
</body>
<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
