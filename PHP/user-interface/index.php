

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAPRU - Homepage</title>
    <!-- In <head> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Your custom CSS after Bootstrap -->
    <link rel="stylesheet" href="../../CSS/user-interface/index.css">
    <link rel="stylesheet" href="../../CSS/user-interface/auth.css">
    <link rel="stylesheet" href="../../CSS/user-interface/footer.css">
    <link rel="stylesheet" href="../../CSS/user-interface/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>


</head>

<body>

    <?php include '../../PHP/user-interface/navbar.php'; ?>

    <?php include '../../PHP/user-interface/auth.php'; ?>


    <!-- ======================================================================================================================================= -->
    <div class="hero-banner">
        <div class="hero-banner-bg">
            <img src="../../Pictures/user-interface/banners-images-logo/mapru.png" alt="Background">
        </div>

        <div class="hero-banner-backdrop"></div>

        <div class="hero-banner-overlay ">
            <div class="banner-text ">
                <div class="text-top">
                    <h5>WELCOME TO MAPRU</h5>
                </div>
                <div class="text-mid">
                    <h2>Creating Confident Smiles Every Day</h2>
                </div>
                <div class="text-bottom">
                    <p>
                        At MAPRU Dental Clinic, we combine modern dentistry with a personal touch,
                        tailoring every treatment to your unique needs.
                    </p>
                </div>
                <button id="index-appointment-btn" class="appointment-btn">Schedule an Appointment</button>
            </div>
        </div>
    </div>




    <!-- ======================================================================================================================================= -->


    <section class="about-section ">
        <div class="about-section-wrapper">
            <div class="row about-row  ps-4 pt-5">

                <!-- Image -->
                <div class="col-about-section-left col-xxl-6 col-xl-12 col-lg-12 col-md-12 d-flex justify-content-end">
                    <div class="about-section-img  py-1 ">
                        <img src="../../Pictures/user-interface/banners-images-logo/second banner.jpg"
                            alt="Clinic Image">
                    </div>
                </div>

                <!-- Text -->
                <div
                    class="col-about-section-right col-xxl-6 col-xl-12 col-lg-12 col-md-12 d-flex justify-content-start">
                    <div class="about-section-text py-1 h-100">

                        <div class="about-section-content-text  ps-4 ">
                            <p>
                                <strong>MAPRU Dental Clinic </strong> is a trusted dental care provider located in
                                Bacoor,
                                Cavite led by Dra. Maja Prudente.
                                Dedicated to delivering quality, affordable, and patient-centered oral healthcare, the
                                clinic serves both
                                children and adults with a wide range of dental services tailored to meet individual
                                needs.
                            </p>
                            <br>
                            <p>
                                From <b>routine checkups and cleanings </b> to more advanced treatments like braces,
                                root
                                canal therapy, dental implants,
                                and crowns, MAPRU Dental Clinic combines professional expertise with a warm and
                                welcoming
                                environment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================================================================================================= -->


    <!-- why choose us-->
    <section class="why-choose d-flex flex-column justify-content-center">
        <h2>Why Choose MAPRU Dental Clinic?</h2>

        <!-- 4 Grids -->
        <div class="grid-container d-flex justify-content-center">


            <div class="row row-cols-xxl-4 row-cols-xl-4  row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 py-3 ">

                <div class="col grid-col">
                    <div class="grid-item">
                        <div class="grid-img-container ">
                            <img src="../../Pictures/user-interface/icons/Personalized.png" alt="Perosnalized Image">
                        </div>
                        <h3>Personalized Dental Care</h3>
                        <p>Your smile is personal, and your dental care should be too.</p>
                    </div>
                </div>
                <div class="col grid-col">

                    <div class="grid-item">
                        <div class="grid-img-container ">
                            <img src="../../Pictures/user-interface/icons/team.png" alt="Team Image">
                        </div>
                        <h3>Expert & Compassionate Team</h3>
                        <p>Led by Dra. Maja Prudente, our team is dedicated to providing high-quality dental services
                            with
                            honesty,
                            professionalism, and genuine compassion.</p>
                    </div>
                </div>
                <div class="col grid-col">
                    <div class="grid-item">
                        <div class="grid-img-container">
                            <img src="../../Pictures/user-interface/icons/patient1.png" alt="Patient Image">
                        </div>
                        <h3>Patient-Focused Approach</h3>
                        <p>We take the time to listen to your concerns, explain your treatment options clearly, and
                            ensure you
                            feel
                            supported every step of the way.</p>
                    </div>
                </div>
                <div class="col grid-col">
                    <div class="grid-item">
                        <div class="grid-img-container">
                            <img src="../../Pictures/user-interface/icons/services.png" alt="Services Image">
                        </div>
                        <h3>Comprehensive Dental Services</h3>
                        <p>Whether it's a routine checkup or a more advanced procedure, you can always expect
                            personalized care
                            in a
                            friendly, respectful environment.</p>
                    </div>
                </div>
            </div>
        </div>

        <!--end-->

        <!-- Retained Paragraph -->
        <div class="why-choose-text">
            <p>
                Our clinic combines modern dental technology with a clean, welcoming space designed to put you at ease.
                We believe that exceptional care should be both accessible and affordable, and we’re proud to serve
                individuals and families who value a thoughtful, patient-centered approach. At MAPRU Dental Clinic,
                we don’t just treat teeth—we care for people, and we’re here to help you achieve a healthy, confident
                smile that lasts.
            </p>
        </div>
    </section>

    <!-- ======================================================================================================================================= -->

    <!-- Doctors Section -->
    <section class="doctors d-flex justify-content-center flex-column">
        <h2>Meet Our Doctors</h2>
        <div class="doctor-grid d-flex justify-content-center flex-column mt-3">
            <div class="doctor-grid-inner  ps-4 ">
                <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 ">

                    <div class="col col-doctors">
                        <div
                            class="doctor-card-container w-100 h-100 d-flex justify-content-center px-3 py-4">
                            <div class="doctor-cards-inner">
                                <a href="../../PHP/user-interface/about_doctors.php" class="doctor-card ">
                                    <div class="doctor-img-container">
                                        <img src="../../Pictures/user-interface/doctors/Dra.maja1.jpg" alt="Dr. Maja">
                                    </div>
                                    <p>Dr. Maja Prudente</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-doctors ">
                        <div
                            class="doctor-card-container  w-100 h-100 d-flex justify-content-center px-3  py-4">
                            <div class="doctor-cards-inner"><a href="../../PHP/user-interface/about_doctors.php"
                                    class="doctor-card">
                                    <div class="doctor-img-container">
                                        <img src="../../Pictures/user-interface/doctors/dr.Renz.jpg" alt="Dr. Renz">
                                    </div>
                                    <p>Dr. Renz</p>
                                </a></div>
                        </div>
                    </div>
                    <div class="col col-doctors">
                    
                            <div
                                class="doctor-card-container  w-100 h-100 d-flex justify-content-center px-3  py-4">
                                <div class="doctor-cards-inner">
                                <a href="../../PHP/user-interface/about_doctors.php" class="doctor-card">

                                    <div class="doctor-img-container">
                                        <img src="../../Pictures/user-interface/doctors/Dr.Ruth.jpg" alt="Dr. Irish">

                                    </div>
                                    <p>Dr. Irish</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-doctors">
                    
                            <div class="doctor-card-container w-100 h-100 d-flex justify-content-center px-3  py-4">
                            <div class="doctor-cards-inner">
                                <a href="../../PHP/user-interface/about_doctors.php" class="doctor-card">
                                    <div class="doctor-img-container">
                                        <img src="../../Pictures/user-interface/doctors/Dr.Jano2.jpg" alt="Dr. Jano">
                                    </div>
                                    <p>Dr. Jano</p>
                                </a>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
    </section>

    <!-- ======================================================================================================================================= -->


    <!-- Services Section -->
    <section class="services">
        <h2>Our Services</h2>
        <div class="service-grid">
            <div class="service-card">
                <img src="../../Pictures/user-interface/services/general dentistry.png" alt="Periodontics">
                <div class="overlay">
                    <h3>Periodontics</h3>
                    <ul>
                        <li><a href="../../PHP/user-interface/services.php#periodontics">Oral Phrophylaxis</a></li>
                        <li><a href="../../PHP/user-interface/services.php#periodontics">Deep Scaling</a></li>
                    </ul>
                </div>
            </div>

            <div class="service-card">
                <img src="../../Pictures/user-interface/services/cosmetic care.png" alt="Cosmetic Care">
                <div class="overlay-right bg-info">

                    <div class="overlay-header">
                    <h3>Cosmetic Care</h3>
                    </div>
                    <div class="overlay-content">
                    <ul>
                        <li><a href="../../PHP/user-interface/services.php#cosmetic-care">Tooth Filling</a></li>
                        <li><a href="../../PHP/user-interface/services.php#cosmetic-care">Teeth Whitening</a></li>
                        <li><a href="../../PHP/user-interface/services.php#cosmetic-care">Cosmetic Bonding</a></li>
                    </ul>
                    </div>
                </div>
            </div>

            <div class="service-card">
                <img src="../../Pictures/user-interface/services/orthodontics_services.png" alt="Orthodontics">
                <div class="overlay">
                    <h3>Orthodontics</h3>
                    <ul class="ito bg-info">
                        <li><a href="../../PHP/user-interface/services.php#orthodontics">Metal Braces</a></li>
                        <li><a href="../../PHP/user-interface/services.php#orthodontics">Ceramic Braces</a></li>
                        <li><a href="../../PHP/user-interface/services.php#orthodontics">Self Ligating Braces</a></li>
                    </ul>
                </div>
            </div>

            <div class="service-card">
                <img src="../../Pictures/user-interface/services/prosthodontics.png" alt="Prosthodontics">
                <div class="overlay-right">
                    <h3>Prosthodontics</h3>
                    <ul>
                        <li><a href="../../PHP/user-interface/services.php#prosthodontics">Fixed Denture</a></li>
                        <li><a href="../../PHP/user-interface/services.php#prosthodontics">Partial Denture</a></li>
                        <li><a href="../../PHP/user-interface/services.php#prosthodontics">Complete Dentures</a></li>
                    </ul>
                </div>
            </div>

            <div class="service-card">
                <img src="../../Pictures/user-interface/services/surgical treatment.png" alt="Surgical Treatment">
                <div class="overlay">
                    <h3>Surgical Treatment</h3>
                    <ul>
                        <li><a href="../../PHP/user-interface/services.php#surgical-treatment">Tooth Extraction</a></li>
                        <li><a href="../../PHP/user-interface/services.php#surgical-treatment">Odontectomy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="Clinic-Images">
        <h2>Your trusted Partner in Dental Health</h2>
        <h3>From routine checkups to advanced treatments, we’re here to keep your smile healthy and confident.</h3>
        <div class="Clinic-Slideshow">
            <img class="Clinic-Slide" src="../../Pictures/user-interface/dental-look/Clinic1.png"
                alt="Pictures of Clinic">
            <img class="Clinic-Slide" src="../../Pictures/user-interface/dental-look/Clinic1.png"
                alt="Pictures of Clinic">
            <img src="Pictures/" alt="">
            <img src="Pictures/" alt="">

            <button class="display-left" onclick="plusDivs(-1)">&#10094</button>
            <button class="display-right" onclick="plusDivs(1)">&#10095</button>

            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("Clinic-Slide");
                    if (n > x.length) { slideIndex = 1 }
                    if (n < 1) { slideIndex = x.length }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex - 1].style.display = "block";
                }
            </script>
        </div>
    </section>

    <section class="Reviews">
        <h2>Real Smiles, Real Stories</h2>
        <h3>Hear directly from the patients who make our work so rewarding.</h3>
        <div class="Reviews-of-Patient" id="Reviewscontainer">
            <h2>What People Are Saying</h2>
            <img src="acudent_logo.png" alt="">
            <p>"This clinic changed my life"</p>
            <img src="acudent_logo.png" alt="">
        </div>
    </section>

    <!-- ======================================================================================================================================= -->

    <!--Map of Mapru Dental Clinic-->
    <div class="Map">
        <h2>Where you can find us</h2>
        <h3>Visit us at our clinic—we’re closer than you think!</h3>
        <div class="Mapru Map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.0730482535437!2d120.94744627590231!3d14.422952481399673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d25b9c7a8d79%3A0xf33a33d44be4864!2sMAPRU%20Dental%20Clinic!5e0!3m2!1sen!2sph!4v1757143887642!5m2!1sen!2sph"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="details">
                <h2>The smile that you deserve!</h2>
                <div class="info-row">
                    <img src="../../Pictures/user-interface/icons/location.png" alt="Location Pic">
                    <p>9067 DSM Subdivision Mambog 1, Bacoor City, Cavite</p>
                </div>

                <div class="info-row">
                    <img src="../../Pictures/user-interface/icons/cellphone.png" alt="Cellphone Pic">
                    <p>0915 748 5132</p>
                </div>

                <div class="info-row">
                    <img src="../../Pictures/user-interface/icons/email.png" alt="Email Pic">
                    <p>maprudentalclinic@gmail.com</p>
                </div>

                <div class="info-row">
                    <img src="../../Pictures/user-interface/icons/clock.png" alt="Clock Pic">
                    <p>Office hours: Monday - Sunday <br> 8:00 - 5:00 PM</p>
                </div>
            </div>
        </div>
    </div>



    <!-- ======================================================================================================================================= -->

    <!--Footer Section-->
    <footer class="footer">
        <div class="footer-container">
            <!-- Left Section -->
            <div class="footer-section left">
                <h3>About Mapru</h3>
                <ul>
                    <li><a href="../../PHP/user-interface/about.php">Who we are</a></li>
                    <li><a href="../../PHP/user-interface/contact.php">Contact Us</a></li>
                    <li><a href="../../PHP/user-interface/about_doctors.php">Our Doctors</a></li>
                    <li><a href="#">Customer Reviews</a></li>
                </ul>
            </div>
            <!-- Center Section -->
            <div class="footer-section center">
                <img src="../../Pictures/user-interface/banners-images-logo/logo.png" alt="MAPRU Logo"
                    class="footer-logo">
                <div class="social-icons">
                    <a href="https://instagram.com/maprudentalclinic" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://facebook.com/MAPRUDentalClinic" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
                <p class="copyright">&copy; MAPRU DENTAL CLINIC</p>
            </div>
            <!-- Right Section -->
            <div class="footer-section right">

                <h3>Services</h3>
                <ul>
                    <li><a href="../../PHP/user-interface/services.php#periodontics">Periodontics</a></li>
                    <li><a href="../../PHP/user-interface/services.php#cosmetic-care">Cosmetic Care</a></li>
                    <li><a href="../../PHP/user-interface/services.php#orthodontics">Orthodontics</a></li>
                    <li><a href="../../PHP/user-interface/services.php#prosthodontics">Prosthodontics</a></li>
                    <li><a href="../../PHP/user-interface/services.php#surgical-treatment">Surgical Treatment</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--Footer Section-->
    <script src="../../Javascript/user-interface/navbar.js"></script>
    <script src="../../Javascript/user-interface/index.js"></script>
    <script src="../../Javascript/user-interface/auth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>