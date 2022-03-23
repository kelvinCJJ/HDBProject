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
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach($row as $data)
    {
        echo "<div class='col'>
    <div class='card h-100'><
    <a href=/BTO1>
      <img src='".$data[5]."' class='card-img-top' alt=''>
      <div class='card-body'>
        <h5 class='card-title'>".$data[1]."</h5>
        <p class='card-text'>This is a BTO located in ".$data[2]." with ".$data[3]." available units, the room types are ".$data[4].". This content is a little bit longer.</p>
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
      <img src="img/bto/bto1.jpg">
            </a>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Jurong West(July 2023)</strong>
    <img src="img/bto/bto2.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Yishun(August 2024)</strong>
      <img src="img/bto/bto3.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Queenstown(January 2026)</strong>
      <img src="img/bto/bto4.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Geylang(December 2027)</strong>
     <img src="img/bto/bto5.jpg"/>
      <div class="details">
        <p class="minsell">Minimum Selling Price:</p>
        <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
    <li>
	<p class="btoname"><strong>Bukit Merah(February 2024)</strong>
      <img src="img/bto/bto6.jpg"/>
      <div class="details">
      <p class="minsell">Minimum Selling Price:</p>
      <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
	<li>
	<p class="btoname"><strong>Toa Payoh(June 2025)</strong>
      <img src="img/bto/bto7.jpg"/>
      <div class="details">
      <p class="minsell">Minimum Selling Price:</p>
      <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
	<li>
	<p class="btoname"><strong>Hougang(March 2026)</strong>
      <img src="img/bto/bto8.jpg"/>
      <div class="details">
      <p class="minsell">Minimum Selling Price:</p>
      <p class="maxsell">Maximum Selling Price:</p>
      </div>
    </li>
</ul>
</body>
<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
