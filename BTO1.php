<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');
?>
<!DOCTYPE html>
<html>
   
    <head>
        <script src="https://kit.fontawesome.com/dba75d4267.js" crossorigin="anonymous">
        </script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <title>
            HDB BTO
        </title>
    </head>
<body>
    

        <div class ="housedetails">
    
    <div class ="housetitle">
        <h1>Fernvale</h1>
        <div class="row">
        </div>
    </div> 
            
    <div class ="bto_pic">
        
        <div class="row">
            <div class="col">
         <?php
    $btoid= $_GET["btoid"];
            $select = mysqli_query($conn, "SELECT * FROM btoimages WHERE BTOId = btoid")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_all($select);
    } else {
        echo 'error';
    }
    
    foreach($row as $data)
    {
    echo"
        
        <img src='".$data[1]."' ></div>
        
        ";
    } ?>
            </div>
        </div>
    </div>
             
    </div>
            
<?php      
echo $_GET["btoid"];
$select = mysqli_query($conn, "SELECT* FROM bto WHERE BTOId = btoid ")
            or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_all($select);
    } else {
        echo 'error';
    }
?>
<?php
    foreach($row as $data){
        
    echo" <div class='extra-info'>
        <h1> <i class='fa-solid fa-house-user'></i> Available Units :".$data[3]."</h1>
    <h2> <i class='fa-solid fa-bed'></i> Room Type:".$data[4]."</h2>
    </div>
              
    
    <hr class='line'>
   
        
        <h3>
            Description: ".$data[6]."
            
        </h3> 
         "
    ;}
    ?>
    
    
</body>
</html>


<script src="js/bootstrap.min.js"></script>	
<?php require('components/footer.inc.php'); ?>