<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../../CSS/user-interface/about.css">
    <link rel="stylesheet" href="../../CSS/user-interface/auth.css">
    <link rel="stylesheet" href="../../CSS/user-interface/footer.css">
    <link rel="stylesheet" href="../../CSS/user-interface/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <title>MAPRU - About</title>
</head>

<body>

    <!-- ======================================================================================================================================= -->

    <!--Navigation Bar-->
    <!-- Top nav -->

    <?php include '../../PHP/user-interface/navbar.php'; ?>

    <!-- ======================================================================================================================================= -->



    <script src="../../Javascript/user-interface/navbar.js"></script>

    >

    <!-- ======================================================================================================================================= -->


    <!--Sign In Popup Modal-->
    <div id="popupModal"></div>
    <script src="../../Javascript/user-interface/auth.js"></script>
    <!--Sign In Popup Modal-->

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

    <!-- Mission and Vision Section -->
    <section class="mission-vision py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <h2 class="section-title">Our Mission & Vision</h2>
                <p class="section-subtitle">
                    More than just dental care — we’re building confidence, trust, and a lifetime of healthy smiles.
                </p>
            </div>

            <div class="row align-items-start justify-content-center gy-4">
                <!-- Mission -->
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-10 mb-4">
                    <div class="mv-card mission p-4">
                        <h3 class="mv-title">Our Mission</h3>
                        <p class="mv-text">
                            At <strong>MAPRU Dental Clinic</strong>, our mission is to provide compassionate,
                            high-quality dental care
                            that empowers every patient to achieve and maintain their best oral health.
                            We believe that every smile tells a story — and it’s our responsibility to help each patient
                            smile
                            confidently through personalized, gentle, and affordable care.
                        </p>
                        <p class="mv-text">
                            Our approach centers on <strong>education, prevention, and patient comfort</strong>.
                            We take time to listen, explain, and ensure every individual understands their treatment
                            options,
                            creating an atmosphere built on trust and transparency.
                            Whether it’s a simple cleaning or a complex procedure, we aim to make every visit
                            stress-free, reassuring, and focused on your long-term well-being.
                        </p>
                        <p class="mv-text">
                            Through continuous learning, advanced dental technology, and a sincere passion for improving
                            lives,
                            MAPRU Dental Clinic strives to raise the standard of care and redefine how dental
                            experiences should feel —
                            <em>personal, professional, and full of heart.</em>
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-10 mb-4">
                    <div class="mv-card vision p-4">
                        <h3 class="mv-title">Our Vision</h3>
                        <p class="mv-text">
                            Our vision is to be recognized as one of Cavite’s most trusted and respected dental clinics
                            —
                            a place where innovation meets compassion, and where every patient feels genuinely cared
                            for.
                            We aim to build a modern dental home that families can rely on for generations,
                            defined not only by excellence in treatment but by warmth, honesty, and human connection.
                        </p>
                        <p class="mv-text">
                            We envision a future where oral health care is accessible to everyone,
                            where fear and anxiety are replaced by comfort and confidence,
                            and where smiles become symbols of happiness, health, and pride.
                            Our goal is to inspire patients to take an active role in their dental health
                            and to see MAPRU Dental Clinic as a lifelong partner in their journey toward wellness.
                        </p>
                        <p class="mv-text">
                            Ultimately, we aspire to be more than a clinic —
                            we want to be a community of caring professionals who transform smiles and touch lives,
                            one appointment, one patient, and one smile at a time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--Footer Section-->
    <div id="footer"></div>
    <script src="../../Javascript/user-interface/footer.js"></script>
    <!--Footer Section-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>