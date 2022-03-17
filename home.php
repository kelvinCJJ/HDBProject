<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
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


<div>
<h2>Available BTO </h2>
<p style = "text-align: right"><a href="BTO.php"> View More > </a></p>
	<ul class="image-list-row">
    <li>
	<p class="btoname"><strong> Serangoon (June 2025)</strong>
            <a href="BTO1.php">
      <img src="img/bto1.jpg">
            </a> </p>
    </li>
    <li>
	<p class="btoname"><strong>Jurong West(July 2023)</strong>
    <img src="img/bto2.jpg"/>

    </li>
    
    <li>
	<p class = "btoname"><strong>Yishun (August 2024)</strong>
      <img src="img/bto3.jpg"/>
    </li>
    
    <li>
	<p class="btoname"><strong>Queenstown(January 2026)</strong>
      <img src="img/bto4.jpg"/>
    </li>
    </ul>
</div>
<h2>Available Resale </h2>
<p style = "text-align: right"><a href="resale.php"> View More > </a></p>
    <ul class="image-list-row">
    <li>
	<p class="btoname"><strong>Newton Circle(June 2021)</strong>
      <img src="img/resale1.jpg">
    </li>
    
    <li>
	<p class="btoname"><strong>Jurong East(July 2021)</strong>
    <img src="img/resale2.jpg"/>
    </li>
    
    <li>
	<p class="btoname"><strong>Yishun Ring(August 2021)</strong>
      <img src="img/resale3.jpg"/>
    </li>
    
    <li>
	<p class="btoname"><strong>Commonwealth(January 2021)</strong>
      <img src="img/resale4.jpg"/>
    </li>
</ul>
</body>
<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>
