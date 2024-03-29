<?php
require('components/head.inc.php');
require('components/navbar.inc.php');
require('config.php');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, ($_POST['phone']));
    $call = mysqli_real_escape_string($conn, ($_POST['call']));
    $area = mysqli_real_escape_string($conn, ($_POST['area']));
    $message = mysqli_real_escape_string($conn, ($_POST['message']));
    

    mysqli_query($conn, "INSERT INTO contactform(Name,Email,Phone,Request,Area,Message) VALUES('$name','$email','$phone','$call','$area','$message')")
                or die('query error');
        $note[] = 'Thank you! We will be in contact with you shortly.';
    }
?>
<div class="container">
<h1 class="my-5">Frequently Asked Questions (FAQs)</h1>
<div class="accordion container" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        How are the flats on offer organised on the portal?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Build-To-Order (BTO) flats are grouped by town/estate and project name. Balance flats are grouped by town/estate and street name.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        What documents do I need when applying for a flat?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Identity card, passport, birth certificates of children, marriage/divorce certificate (if applicable), death certificate (if applicable) and income documents.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Will all flats offered for sale be listed on the portal?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>During a sales launch, all flats on offer will be displayed on the portal. After the application period has ended, only those who have applied for the flats can view the flats in the estate and flat type they have applied for.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        How can I buy a flat listed on the portal?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You need to apply online via the HDB Flat Portal during the application period of the sales launch. Subscribe to our eAlert Service to be notified of a launch.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Will all flats offered for sale be listed on the portal?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>During a sales launch, all flats on offer will be displayed on the portal. After the application period has ended, only those who have applied for the flats can view the flats in the estate and flat type they have applied for.
      </div>
    </div>
  </div>
 <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Where can I find out more about the nearest amenities?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Click on "Read more" where the details will be listed and you can view data such as nearby supermarkets, school, etc.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        I am only interested in flats in a particular estate, how do I find them?
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>You may use the filters provided on the portal to help you search for the available flats by location, price and/or other criteria. By clicking on ‘More Filters’, you can rank the filters in the order of your preference.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        What do I do if I have more questions regarding the flats?
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>There is a contact form below where you can submit your questions and we will get back to you soon!
      </div>
    </div>
  </div>   
</div>
    <section class="h-100">
    <div class="row justify-content-sm-center h-100">
            <div class="text-center my-5">
                </div>
            <div class="card my-5 shadow-lg">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4"><h2>Contact us!</h2></h1>
                    <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                        <?php
                        if (isset($note)) {
                            foreach ($note as $note) {
                               
                                    echo '<div class="alert alert-success" role="alert" onclick="this.remove()">' . $note . '</div>';          
                            }
                        }
                        ?>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                            <div class="invalid-feedback">
                                Name is required	
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                            <input id="email" type="text" class="form-control" name="email" value="" required>
                            <div class="invalid-feedback">
                                Email is invalid
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="phone">Contact Number</label>
                            <input id="phone" type="text" class="form-control" name="phone" required>
                            <div class="invalid-feedback">
                                Contact number is required
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="call">Request for callback</option>
                            <select name="call" id='call'>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <div class="invalid-feedback">
                                Option is required
                                </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="area">Area of concern</option>
                            <select name="area" id="area">
                            <option value="BTO">BTO</option>
                            <option value="Resale">Resale</option>
                            <option value="General">General</option>
                            </select>
                            <div class="invalid-feedback">
                                Option is required
                                </div>
                        </div>
        
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="message">Message</label>
                            <input id="message" type="text" class="form-control" name="message" required>
                            <div class="invalid-feedback">
                                Message is required
                            </div>
                        </div>                                   
                        
                        <p class="form-text text-muted mb-3">
                            By submitting you agree with our terms and condition.
                        </p>

                        <div class="align-items-center d-flex">
                            <button type="submit" name="submit" class="btn btn-primary ms-auto">
                                Submit	
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
                </section>
</div>
<?php require('components/footer.inc.php'); ?>