<?php
include "include/header.php";
?>
 <style>
      .btn.btn-primary{
          background-color: #43cb83;
      }
      .btn.btn-primary:hover{
          background-color: #f59011;
      }
      @media (max-width: 1366px) {
          .card{
              width: unset !important;
          }
      }
  .ratings i {
      font-size: 16px;
      color: red
  }
  
  .strike-text {
      color: red;
      text-decoration: line-through
  }
  
  .product-image {
      width: 100%
  }
  
  .dot {
      height: 7px;
      width: 7px;
      margin-left: 6px;
      margin-right: 6px;
      margin-top: 3px;
      background-color: blue;
      border-radius: 50%;
      display: inline-block
  }
  
  .spec-1 {
      color: #938787;
      font-size: 15px
  }
  
  h5 {
      font-weight: 400
  }
  
  .para {
      font-size: 16px
  }
  .card a{
text-align:center;
  }
  .card-img-top{
   max-height: 280px;
height: 219px;
width: 219px;
border-radius: 50%;

  }
  .card:hover {
      box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.31);
      transition: 0.5s;
  }
  .fb_iframe_widget.iframe {
            height: 700px !important;
        }
  
      </style>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top">
         <div class=" container d-flex align-items-center">
 
             <a href="index.php" class="logo"><img src="assets/img/logonew.png" alt=""></a>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <h1 class="logo mr-auto"><a href="index.php"></a></h1> -->
             <p class="logoinnerside"><a href="index.php">PushPlata Ayurveda </a>
                 <a href="index.php">Hospital &amp; Panch
                     Karma Centre</a>
               
             </p>
 
             <nav class="nav-menu d-none d-lg-block">
                 <ul>
                     <li class=""><a href="index.php">Home</a></li>
                     <li class=""><a href="Aboutus.php">About Us</a>
                     </li>
                     <li class="dropdown"><a href="#"><span>Our Specialities</span><i class="fa fa-angle-down"></i></a>
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
                     <li><a href="treatments.php"> Our Research & Blogs</a>
                     <li class="active"><a href="treatments.php"> Treatments</a>
                  </li>
                     <li><a href="index.php#gallery">Gallery</a></li>
                     <li><a href="contact.php">Contact Us</a></li>
                 </ul>
             </nav>
             <!-- .nav-menu -->
 
             
            <?php
include 'include/tele.php';
            ?>
         </div>
     </header>
     <!-- End Header -->

<div class="maindiv" style="margin-top:10%;">
<h2 style="text-align: center;margin-bottom: 20px;color: #f59011;">Treatments</h2>

<div class="row mt-5 pt-2" style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;width: 70%;margin: 0 auto;">
      <div class="col-md-4 mt-4">
         <a href="cervical-spondylosis.php" target="_blank">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/3d-neck-pain-1-150x150.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">CERVICAL SPONDYLOSIS <a href="cervical-spondylosis.php" target="_blank" class="float-right d-inline-flex share"></a></h5>
               <a href="cervical-spondylosis.php" target="_blank" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </a>
      </div>
      <div class="col-md-4 mt-4" >
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/bigstock-Acute-Pain-In-The-Kidneys-Pai-67278373-150x150.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Back Pain Management <a href="https://pushplataayurveda.com/back-pain-management/" class="float-right d-inline-flex share"></a></h5>
               <a href="https://pushplataayurveda.com/back-pain-management/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
         </a>
      </div>
      <div class=" col-md-4 mt-4 ">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/RHEUMATOID-ARTHRITIS-250x250.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">ARTHRITIS AND RHEUMATOID <a href="https://pushplataayurveda.com/general-checkup/" class="float-right d-inline-flex share"></a></h5>
              
               <a href="https://pushplataayurveda.com/general-checkup/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
         </a>
      </div>
   </div>
</div>

<div class="row mt-5 "   style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;width: 70%;margin: 0 auto;">
      <div class=" col-md-4"  >
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/LUMBARSPONDYLOSIS.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">CERVICAL SPONDYLOSIS <a href="https://pushplataayurveda.com/lumbar-spondylosis/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/lumbar-spondylosis/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
            </a>
         </div>
      </div>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/back-150x150.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">SPINAL DISORDER <a href="https://pushplataayurveda.com/spine-disorders/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/spine-disorders/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      </a>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/image_157-Copy-250x250.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">DIGESTIVE DISORDER <a href="https://pushplataayurveda.com/digestive-disorder-treatment-vaman-virechana-basti-nadi-sweda/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/digestive-disorder-treatment-vaman-virechana-basti-nadi-sweda/" class="float-right">Read more 
                  </a><i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="row mt-5 " data-aos="flip-left" style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;width: 70%;margin: 0 auto;">
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/RESPIRATORY-ALLERGIES-250x250.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">RESPIRATORY ALLERGY <a href="https://pushplataayurveda.com/your-health-life-style/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/your-health-life-style/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
            </a>
         </div>
      </div>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/multiple-sclerosis-250x250.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">MUSCULOSKETEL DISORDER  <a href="https://pushplataayurveda.com/back-pain-management/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/back-pain-management/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
            </a>
         </div>
      </div>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/osteoporosis-physiotherapy-treatment-toronto-1024x682.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">OSTEOPOROSIS <a href="https://pushplataayurveda.com/osteoporosis/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/osteoporosis/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
         </a>
      </div>
   </div>
</div>


<div class="row mt-5 " data-aos="flip-left" style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;width: 70%;margin: 0 auto;">
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/LIVER-DYSFUNCTION-250x250.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">LIVER FUNCTION DISORDER <a href="https://pushplataayurveda.com/liver-dysfunctions/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/liver-dysfunctions/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
            </a>
         </div>
      </div>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/Physorieses-150x150.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">SKIN MANAGEMENT <a href="" class="float-right d-inline-flex share"></a></h5>
               
               <a href="" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      </a>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/OBESITY-PICTURE-FOR-WEBSITE.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">OBESITY MANGEMENT <a href="https://pushplataayurveda.com/obesity-management-2/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/obesity-management-2/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
            </a>
         </div>
      </div>
   </div>
</div>


<div class="row mt-5 " data-aos="flip-right" style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;width: 70%;margin: 0 auto;">
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/avascular_necrosis_hip-250x250.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">AVSCULAR NECROSIS <a href="https://pushplataayurveda.com/avscular-necrosis/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/avscular-necrosis/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
            </a>
         </div>
      </div>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/PARKINSONS-250x250.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">PARKINSONS <a href="" class="float-right d-inline-flex share"></a></h5>
               
               <a href="" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      </a>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/multiple-sclerosis-250x250.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">MULTIPLE SCLEROSIS <a href="" class="float-right d-inline-flex share"></a></h5>
               
               <a href="" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      </a>
   </div>
</div>

<div class="row mt-5 " data-aos="flip-right" style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;width: 70%;margin: 0 auto;">
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/EYE-DISORDER-250x250.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">EYE DISORDER <a href="https://pushplataayurveda.com/eye-disorder/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/eye-disorder/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
         </a>
      </div>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/boo-2399974_1920-150x150.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">SPORTS INJURY <a href="" class="float-right d-inline-flex share"></a></h5>
               
               <a href="" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      </a>
     
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/placeholder.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">HEMIPLEGIA <a href="https://pushplataayurveda.com/hemiplegia/" class="float-right d-inline-flex share"></a></h5>
               
               <a href="https://pushplataayurveda.com/hemiplegia/" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      </a>
   
   </div>
</div>

<div class="row mt-5 mb-5" data-aos="flip-right" style="display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;width: 70%;margin: 0 auto;">

<div class=" col-md-4">
      </div>
      <div class=" col-md-4">
         <a href="">
         <div class="card">
            <img class="card-img-top" src="assets/img/products/MIGRANE-250x250.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">MIGRANE <a href="" class="float-right d-inline-flex share"></a></h5>
               
               <a href="" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      </a>
      <div class=" col-md-4">
      </div>
   </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?php
include "include/footer.php";
?>
    <script src="assets/js/main.js"></script>

</body>
</html>