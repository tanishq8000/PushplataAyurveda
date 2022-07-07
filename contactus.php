<?php
include "include/header.php";
?>
    <style>
        .section-sm {
            padding: 70px 0;
        }

        .fb_iframe_widget.iframe {
            height: 700px !important;
        }

        .checkp strong {
            color: green;
        }
    </style>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="index.php" class="logo"><img src="assets/img/logonew.png" alt=""></a>
            
            <p class="logoinnerside"><a href="index.php">PushPlata Ayurveda </a>
                <a href="index.php">Hospital &amp; Panch
                    Karma Centre</a>
               
            </p>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class=""><a href="index.php">Home</a></li>
                    <li class=""><a href="Aboutus.php">About Us</a>
                    </li>
                    <li class="dropdown"><a href="#"><span>Our Specialities</span> <i
                                class="fa fa-angle-down"></i></a>
                                <ul>
                            <li><a href="cervical-spondylosis.php">Cervical Spondylosis</a></li>
                            <li><a href="back-pain-management.php">Back Pain Management</a></li>
                            <li><a href="lumbar-spondylosis.php">Lumbar Spondylosis</a></li>
                            <li><a href="spine-disorders.php">Spinal Disorder</a></li>
                            <li><a href="digestive-disorder-treatment-vaman-virechana-basti-nadi-sweda.php">Digestive
                                    Disorder</a></li>
                            <li><a href="your-health-life-style.php">Respiratory Allergy</a></li>
                            <li><a href="back-pain-management.php">Musculosketel Disorder</a></li>
                            <li><a href="osteoporosis.php">Osteoporosis</a></li>
                            <li><a href="liver-dysfunctions.php">Liver Function Disorder</a></li>
                            <li><a href="obesity-management-2.php">Obesity Mangement</a></li>
                            <li><a href="avscular-necrosis.php">Avscular Necrosis</a></li>
                            <li><a href="hemiplegia.php">Hemiplegia</a></li>
                            <li><a href="eye-disorder.php">Eye Disorder</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="treatments.php"> Our Research & Blogs</a>
                    </li>
                    <li class=""><a href="treatments.php"> Teatments</a>
                    </li>
                    <li><a href="index.php#gallery">Gallery</a></li>
                    <li class="active"><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->

            
            <?php
include 'include/tele.php';
            ?>
        </div>
    </header>
    <!-- End Header -->
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact Us</h2>
                    <ol>
                        <li><a href="index.php" style="color:black;">Home</a><a href="">/Contact Us</a></li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="row">
                <div class="col-lg-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.271695229998!2d76.62983951487767!3d28.19905681031833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d5b8b0d1d18c1%3A0x212869351cc89372!2sPushplata%20Ayurveda!5e0!3m2!1sen!2sin!4v1629137875019!5m2!1sen!2sin"
                        width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <br>Pushplata Ayurveda Near K.L.P college, Shiv Nagar </br> Ghisa Ki Dhani, Rewari,
                                    Haryana 123401</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>admin@pushplataayurveda.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>01274-251007</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <?php
include "include/footer.php";
?>
</body>
</html>