<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

$btoid = $_GET["btoid"];

$select1 = mysqli_query($conn, "SELECT * FROM bto WHERE BTOId = $btoid ")
                or die($conn->error);

        if (mysqli_num_rows($select1) > 0) {
            $row1 = mysqli_fetch_all($select1);
        } else {
            echo 'error';
        }
        foreach ($row1 as $data1) {
?>
<body>
    <div class="container">
    <div class ="housedetails">

        <div class ="housetitle">
            <h1><?php echo "<h1>".$data1[1]."</h1>"?>
            <div class="row">
            </div>
        </div> 
        <div class ="bto_pic">

            <?php
            
            $select = mysqli_query($conn, "SELECT * FROM btoimages WHERE BTOId = $btoid")
                    or die($conn->error);

            if (mysqli_num_rows($select) > 0) {
                $row = mysqli_fetch_all($select);
            } else {
                echo 'error';
            }
            foreach ($row as $data) {
                echo"
            <img src='" . $data[1] . "' >   
            ";
            }
            ?>
        </div>    
        </div>

        <?php
        
        ?>
        <?php
        

            echo" <div class='extra-info'>
        <h1> <i class='fa-solid fa-house-user'></i> Available Units :" . $data1[3] . "</h1>
    <h2> <i class='fa-solid fa-bed'></i> Room Type:" . $data1[4] . "</h2>
    </div>
    <hr class='line'>
        <h3>
            Description: " . $data1[6] . "
        </h3>"
            ;
        }
        ?>
    </div>
</body>

<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>