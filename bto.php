<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

 $select = mysqli_query($conn, "SELECT * FROM bto")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_array($select, MYSQLI_NUM);
        printf ("%s (%s)\n", $row[0], $row[1]);
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
      <img src='".$row[5]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>$row[1]</h5>
        <p class='card-text'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>";
    }
    ?>
</div>

<h1>Build To Order flats(BTO)</h1>

	<ul class="image-list-small">
    <li>
	<p class="btoname"><strong>Serangoon(June 2025)</strong>
            <a href="BTO1.php">
      <img src="img/bto1.jpg">
            </a>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Jurong West(July 2023)</strong>
    <img src="img/bto2.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Yishun(August 2024)</strong>
      <img src="img/bto3.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Queenstown(January 2026)</strong>
      <img src="img/bto4.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Geylang(December 2027)</strong>
     <img src="img/bto5.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Bukit Merah(February 2024)</strong>
      <img src="img/bto6.jpg"/>
      <div class="details">
      <p class="minsell">Minimum Selling Price:</p>
      <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
	<li>
	<p class="btoname"><strong>Toa Payoh(June 2025)</strong>
      <img src="img/bto7.jpg"/>
      <div class="details">
      <p class="minsell">Minimum Selling Price:</p>
      <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
	<li>
	<p class="btoname"><strong>Hougang(March 2026)</strong>
      <img src="img/bto8.jpg"/>
      <div class="details">
      <p class="minsell">Minimum Selling Price:</p>
      <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
</ul>
</body>
<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
