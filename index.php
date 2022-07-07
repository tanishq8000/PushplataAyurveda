<?php
include 'admin/include/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pushplata Ayurveda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/pushplata.jpg" rel="icon">
    <link href="assets/img/pushplata.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <!--<link href="assets/vendor/aos/aos.css" rel="stylesheet">-->
    <!--<link href="assets/css/animate.css  " rel="stylesheet">-->

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/doc.css" rel="stylesheet">
    <link href="assets/css/index.min.css" rel="stylesheet">
    <style>
        /* .testimonial-item::before{
            content: '';
            color: red;
        } */
    </style>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <a class="text-white mr-2" href="tel:+919818069989"><i class="icofont-phone"></i>Call us now +91
                    01274-251007 </a> |
                <a class="text-white ml-2" href="tel:+919818069989"><i
                        class="icofont-ui-message"></i>admin@pushplataayurveda.com</a>
            </div>
            <div class="d-flex align-items-center">
                 <a href="index.php" style="font-size: 13px;color: white;margin-right: 20px;">An ISO 9001:2015
                    Certified Hospital</a>
                <a target="_blank" href="https://www.facebook.com/PushplataAyurveda"><i
                        class="bi bi-facebook text-white m-1"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCF7Y0sLoAIbKqab3yDkJoEg"><i
                        class="bi bi-youtube text-white m-1"></i></a>
                <a target="_blank" href="https://business.google.com/dashboard/l/01030084672622339620 "><i
                        class="bi bi-google text-white m-1"></i></a>
                <a target="_blank" href="https://www.instagram.com/pushplataayurveda/"><i
                        class="bi bi-instagram text-white m-1"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container  d-flex align-items-center">
            <a href="index.php" class="animated animate__backInDown logo"><img src="assets/img/logonew.png" alt=""></a>

            <p class="animated animate__backInDown logoinnerside"><a href="index.php">PUSHPLATA AYURVEDA </a>
                <a href="index.php">Hospital &amp; PanchKarma Centre</a>
               
            </p>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class=""><a href="Aboutus.php">About Us</a>
                    </li>
                    <li class="dropdown"><a href="#"><span>Our Specialities</span> <i class="fa fa-angle-down"></i></a>
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
                    <li class=""><a href="treatments.php"> Treatments</a>
                    </li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </nav>
            <!-- .nav-menu -->
            <div class="telec">
                <img src="assets/teleconsultaion.svg"><a class="appointment-btn scrollto">
                <p style="padding: 0;margin: 0;">Tele Consulation</p>Facility Available
            </a>
            </div>

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">

<?php
$sql = "SELECT * FROM `tbl_homepageslider`";
$res = mysqli_query($conn, $sql);
$check = "d";
?>
<?php
while ($row = mysqli_fetch_assoc($res)) {
    if($check=="d")
    {
        $check="active";
    }
    else{
        $check="";
    }
?>
                <div class="carousel-item lazy <?php echo $check; ?>" data-src="admin/upload/slider/<?php echo $row['imgurl']; ?>"  style="background-image: url('admin/upload/slider/<?php echo $row['imgurl']; ?>')">
                    <div class="container">
                        <h2 style="color: green;"><span>PUSHPLATA AYURVEDA - Hospital &amp; PanchKarma Centre</span>
                        </h2>
                        <p style="color: green;" class="m-1">Ayurveda, a centuries old curative science, studying man as a composite being.
                            Uplifting his physical, mental and spiritual health. Acclaimed the world over as a better
                            alternative to good health</p>
                    </div>
                </div>
                <?php 
                }
                ?>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services" style="display: none;">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="icofont-drug"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="icofont-thermometer-alt"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="icofont-dna-alt-1"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Emergancy section ======= -->
        <section id="cta" class="cta">
            <div class="container">
                <div class="text-center">
                    <h3>In an emergency? Need help now?</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                    <a class="cta-btn scrollto" href="#appointment" data-toggle="modal" data-target="#exampleModal">Make
                        an Make an Appointment</a>
                </div>
            </div>
        </section>

        <!-- End Cta Section -->

        <!-- Section With Images and Content -->
        <section id="skills" class="skills">
            <div class="container">
                <div class="row innertwo">
                    <div class="col-lg-6 pt-4 pt-lg-0 mt-5 order-2 order-lg-1 content">
                        <h3>Specialty</h3>
                        <p class=" fst-italic">
                        </p>
                        <div class="skills-content">
                            CERVICAL SPONDYLOSIS Back Pain Management ARTHRITIS AND RHEUMATOID ARTHRITIS LUMBAR
                            SPONDYLOSIS SPINAL DISORDER DIGESTIVE DISORDER RESPIRATORY ALLERGY MUSCULOSKETEL DISORDER
                            OSTEOPOROSIS LIVER FUNCTION DISORDER SKIN MANAGEMENT OBESITY MANGEMENT AVSCULAR
                            NECROSIS...
                        </div>
                        <a href="treatments.php" class="btn btn-outline-light btn-lg ripple-surface mt-4">View
                            Services</a>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center order-1 order-lg-2">
                        <img src="assets/img/properimg/featuresimg.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Section With Images and Content -->

        <!-- Why CHoose Us -->
        <section id="cta" class="ctasss">
            <div class="container aos-init aos-animate" data-aos="fade-left">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start" style="color: white;">
                        <h3>Why Choose Us_</h3>
                        <p style="text-align: justify;">PUSHPLATA AYURVEDA - Hospital & PanchKarma Centre has a proven
                            track record of
                            offering the very best of Ayurvedic Healthcare. As one of the largest Private Ayurvedic
                            Hospital in Rewari, the Hospital offers an extensive range of specialties. Experienced
                            doctors and Qualified Therapeutic Staff, trained in traditional methods, guarantee a
                            treatment plan tailored to the individual needs of our patients.<br> <a
                                href="Aboutus.php">Read More</a></p>
                    </div>
                    <div class="col-lg-3 ctasss-btn-container text-center">
                        <a class="ctasss-btn align-middle" href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- What Our Patients Are Saying  -->

        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>What Our Patients Are Saying</h2>
                </div>
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-d3444aa7-925f-494f-a2a0-37177ebfec25"></div>
            </div>
        </section>

        
        <!-- End What Our Patients Are Saying  -->
        <!-- ======= Counts Section ======= -->

        <section id="counts" class="counts">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <div style="display: flex;">
                                <i class="icofont-slightly-smile"></i>
                                <!--<span data-toggle="counter-up">3000</span><span style="margin: 0;">K+</span>-->
                                
                                <span class="count percent" data-count="3000">3000 <span style="margin: 0;">K+</span></span>
                                
                            </div>
                            <p><strong> Happy Customers</strong></p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-doctor"></i>
                            <div style="display: flex;">
                                <!--<span data-toggle="counter-up">5</span><span style="margin: 0;">+</span>-->
                                <span class="count percent" data-count="5">5 <span style="margin: 0;">+</span></span>
                            </div>
                            <p>Years Experience</p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <div style="display: flex;">
                                <i class="icofont-slightly-smile"></i>
                                <!--<span data-toggle="counter-up">100</span><span style="margin: 0;">%</span>-->
                                <span class="count percent" data-count="5">100 <span style="margin: 0;">%</span></span>
                            </div>
                            <p>Satisfaction</p>
                            <!-- <a href="#">Find out more &raquo;</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Counts Section -->
        <section id="mericlass">
            <!-- ======= Departments Section ======= -->
            <section id="departments" class="departments" style="display: none;">
                <div class="container aos-init" >
                    <div class="section-title">
                        <h2>Latest Blog</h2>
                    </div>
                    <div class="row aos-init " >
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <ul class="nav nav-tabs flex-column">

                                <li class="nav-item">
                                    <a class=" nav-link show active" data-toggle="tab" href="#data3">
                                        <h4>Piles Treatment and Prevention</h4>
                                        <!-- <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p> -->
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class=" nav-link show" data-toggle="tab" href="#data4">
                                        <h4>Fistula in Ano Kshar Sutra Treatment </h4>
                                        <!-- <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p> -->
                                    </a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-toggle="tab"
                                        href="https://www.ayurvedapilescure.com/blog/">
                                        <h4>Read All Blogs</h4>
                                        <!-- <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p> -->
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content latestblog innertwo">
                                <div class="tab-pane show active" id="data3">

                                    <h3>Piles Treatment and Prevention</h3>
                                    <p class="font-italic">28 August, 2021 (Saturday)</p>
                                    <img src="upload/blog/100622240_departments-1.jpg" alt="" class="img-fluid">
                                    <p>Piles, otherwise called hemorrhoids, are and have been a bother to numerous
                                        individuals. These are fundamentally swollen veins that happen in the anal area.
                                        Hemorrhoids are critical as they help with ...</p>


                                    <a href="" class="">Read more <i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="tab-pane show" id="data4">

                                    <h3>Fistula in Ano Kshar Sutra Treatment </h3>
                                    <p class="font-italic">28 August, 2021 (Saturday)</p>
                                    <img src="upload/blog/814348320_departments-4.jpg" alt="" class="img-fluid">
                                    <p>Piles, otherwise called hemorrhoids, are and have been a bother to numerous
                                        individuals. These are fundamentally swollen veins that happen in the anal area.
                                        Hemorrhoids are critical as they help with ...</p>


                                    <a href="" class="">Read more <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- End Departments Section -->

            <!-- ======= Gallery Section ======= -->
            <section id="gallery" class="gallery">
                <div class="container">

                    <div class="section-title">
                        <h2>Gallery</h2>
                        <p style="color: green;">Walk-in with your problems, walk-out with the assurance of good health.
                        </p>
                    </div>

                    <div class="owl-carousel gallery-carousel">
                        <a  href="assets/img/properimg/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img  src="assets/img/properimg/gallery/1.jpg" alt=""></a>
                        <a href="assets/img/properimg/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img
                                src="assets/img/properimg/gallery/2.jpg" alt=""></a>
                        <a href="assets/img/properimg/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img
                                src="assets/img/properimg/gallery/3.jpg" alt=""></a>
                    </div>
                </div>
            </section>

            <!-- End Gallery Section -->
            <!-- ======= Video Section ======= -->

            <section class="pt-0">
                <div class="container">
                    <div class="news-section">
                        <div class="news-thoughts">
                            <div class="video-section wow">
                                <h2><span>Videos</h2>
                            </div>
                            <div class="video-effect tube">
                                <div class="slide">
                                    <iframe width="1500" height="500" loading="lazy" src="https://www.youtube.com/embed/2VrJ4HFgIV0"
                                        frameborder="0"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>

                                <div class="slide">
                                    <iframe width="1500" height="500"  loading="lazy" src="https://www.youtube.com/embed/BMeiVXELAsU"
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                <div class="slide">
                                    <iframe width="1500" height="500"  loading="lazy" src="https://www.youtube.com/embed/hl7gs4RSYYg"
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>

                                <div class="slide">
                                    <iframe width="1500" height="500"  loading="lazy" src="https://www.youtube.com/embed/nuey5TV7Iq8"
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>
    </main>

    <?php
        include "include/footer.php";
   ?>

    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <!-- Template Main JS File -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"
        type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet"
        type="text/css" />
        <script src="assets/vendor/counterup/counterup.min.js"></script>
    <!-- Template Main JS File -->

    <!-- MDB -->

    <!--<script src="assets/js/Counter-Up_jquery.counterup.min.js"></script>-->
    <script>

        /////////////////////tube slider js start/////////////

        $(document).ready(function () {
            $('.tube').slick({
                infinite: true,
                speed: 1000,
                autoplay: true,
                autoplaySpeed: 2000,
                fade: true,
                cssEase: 'linear',
                prevArrow: "<button type='button' style='display:inline-block;background:transparent;border:0;position: absolute;top:50%;left:-35px;' class='slick-prev pull-left'><i style='font-size:41px;' class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow: "<button type='button' style='display: inline-block;background: transparent;border: 0;position: absolute;top: 50%;right: -35px;' class='slick-next pull-right'><i style='font-size:41px;' class='fa fa-angle-right' aria-hidden='true'></i></button>"
            });
        });
/////////////////////tube slider js end/////////////
    </script>

    <!-- MDB -->
    <!-- <script src="assets/js/main.js"></script> -->
    <!--<script type="text/javascript" src="jquery.lazy.min.js"></script>-->
</body>

<script>

  var counted = 0;
$(window).scroll(function() {

  var oTop = $('.counts').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});

</script>

<script>

    $(".testimonial-img").on("click", function (e) {
        e.preventDefault();
        var $this = $(this);
        var videoUrl = $this.attr("src");
        var popup = $this.attr("href");
        var $popupIframe = $(popup).find("iframe");

        $popupIframe.attr("src", videoUrl);

        $this.closest(".page").addClass("show-popup");
    });

    $(".popup").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        $(".page").removeClass("show-popup");
    });

    $(".popup > iframe").on("click", function (e) {
        e.stopPropagation();
    });

</script>
</script>
<script>

    $('#testimonials.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    });

    $(".testimonial-item img").click(function () {
        var obj = $(this);
        window.open(obj.parent().attr("href"), '_blank');
    });
</script>

</html>