<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
?>

<h1>Frequently Asked Questions (FAQs)</h1>
      <details>
         <summary>How are the flats on offer organised on the portal?</summary>
         <p class="text">Build-To-Order (BTO) flats are grouped by town/estate and project name. Balance flats are grouped by town/estate and street name.</p>
      </details>
      <details>
         <summary>Will all flats offered for sale be listed on the portal?</summary>
         <p class="text">During a sales launch, all flats on offer will be displayed on the portal. After the application period has ended, only those who have applied for the flats can view the flats in the estate and flat type they have applied for.

Find out more about HDB’s different modes of sale and subscribe to our eAlert Service to be notified of a launch.</p>
      </details>
      <details>
         <summary>How can I buy a flat listed on the portal?</summary>
         <p class="text">You need to apply online via the HDB Flat Portal during the application period of the sales launch. Subscribe to our eAlert Service to be notified of a launch.</p>
      </details>
      <details>
         <summary>I am only interested in flats in a particular estate, how do I find them?</summary>
         <p class="text">You may use the filters provided on the portal to help you search for the available flats by location, price and/or other criteria. By clicking on ‘More Filters’, you can rank the filters in the order of your preference.</p>
      </details>
      <details>
         <summary>How would I know when a flat on my watchlist has been taken?</summary>
         <p class="text">You will be notified when a flat on your watchlist has been taken up. You may change the frequency of receiving these notifications at the Watchlist facility page by using the “Notification Settings”.</p>
      </details>
      <details>
         <summary>Will other applicants be able to see the units on my watchlist?</summary>
         <p class="text">No.</p>
      </details>
      <details>
         <summary>If I put a unit on my watchlist, does that mean it has been reserved for me?</summary>
         <p class="text">No. The watchlist facility is only to facilitate your monitoring. Whether you can book a particular unit will depend on the availability of the unit and ethnic quota when your selection appointment is due.</p>
      </details>
   </div>
</div
<br />
<br />


  <h2>Contact us!</h2>
  <form method="post" action="?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">

<p>Request Phone Call:</p>
Yes:<input type="checkbox" value="Yes" name="call"><br />
No:<input type="checkbox" value="No" name="call"><br />


<p>Area of concern</p>
<select name="area" size="1">
<option value="BTO">BTO</option>
<option value="Resale">Resale</option>
<option value="General">General</option>
</select>
<br />

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>
<br />

<?php
//define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $callErr = $areaErr = $messageErr = "";
$name = $email = $phone = $call = $area = $message = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
    } else{
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $nameErr = "Only letters and white space allowed.";
        }
    }
    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    } else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format.";
        }
    }
    if (empty($_POST["phone"])){
        $phoneErr = "Phone number is required";
    } else{
        $phone = test_input($_POST["phone"]);
        if(!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)){
            $phoneErr = "Invalid number format.";
        }
    }
    if (empty($_POST["call"])){
        $callErr = "Option is required";
    } else{
        $call = test_input($_POST["call"]);
    }
    if (empty($_POST["area"])){
        $areaErr = "Option is required";
    } else{
        $area = test_input($_POST["area"]);
    }
    if (empty($_POST["message"])){
        $messageErr = "Message is required";
    } else{
        $message = test_input($_POST["message"]);
    }
    
}

echo "Thank You!";
?>



  
<?php require('components/footer.inc.php'); ?>
