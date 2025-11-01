<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../CSS/user-interface/navbar.css">
    <link rel="stylesheet" href="../../CSS/user-interface/auth.css">
    <link rel="stylesheet" href="../../CSS/user-interface/contact.css">
    <link rel="stylesheet" href="../../CSS/user-interface/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    


    <title>MAPRU - Contact</title>

    
    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
</style>
</head>
<body>
  
  <!-- ======================================================================================================================================= -->

  
    <?php include '../../PHP/user-interface/navbar.php'; ?>

    <!-- ======================================================================================================================================= -->



    <script src="../../Javascript/user-interface/navbar.js"></script>
  <!-- Navigation Bar -->

  <!-- ======================================================================================================================================= -->


    <!--Sign In Popup Modal-->
    <div id="popupModal"></div>
    <script src="../../Javascript/user-interface/auth.js"></script>
    <!--Sign In Popup Modal-->


    <div class="banner">
        <img src="../../Pictures/user-interface/banners-images-logo/mapru_contact.png" alt="Banner_Image">
        <div class="bottom-left-container">
        <div class ="bottom-left">Reach out anytime for <br> expert dental care help</div>
       <button id="Appointment">Schedule an Appointment</button>
        </div>
    </div>

    <div class="contact-team">
        <h2>Contact our Team</h2>
        <p>Have questions or need assistance? We're here to help</p>
    </div>

    <section class="contact-form">
        <div class="form-contact">
            <form>
                <div class="row-contact">
                    <div class="input-contact">
                        <label for="Name">Name</label>
                         <input type="text" id="Name" name="Name" required>
            </div>
            <div class="input-contact">
                        <label for="phone">Phone number</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="input-contact">
                         <label for="mail">Email Address</label>
                        <input type="text" id="mail" name="mail">
                </div>
                <div class="input-contact">
                    <label for="message">Message</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <button type="submit" class="btn-submit">Submit</button>
            </form>
        </div>
    </section>


    <!--Footer Section-->
    <div id="footer"></div>
    <script src="../../Javascript/user-interface/footer.js"></script>
    <!--Footer Section-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>