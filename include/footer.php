<?php
$hostname="localhost";
$dbusername="root";
$pass="";
$dbname="db_push";
$conn=mysqli_connect("localhost","root","","db_push");
if ($conn) {

}

$sql = "SELECT * FROM `tbl_homebanner`";
$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($res);
?>
<button
    style="position: fixed;padding: 13px 10px;right: 8px;border-radius: 3px;z-index: 9;top: 47%;font-size: 15px;display: block;font-weight: 600;"
    class="btngree" href="#appointment" data-toggle="modal" data-target="#exampleModal"><span
        style="padding: 12px 26px;">Appointment</span></button>

<div class="loadingpopup" id="loginpipo" style="display: none;">
    <div class="loadingcontent">
        <img src="assets/img/loading.svg">
        <p>Please Wait!</p>
    </div>
</div>

<?php 
if($result["is_active"]=='1')
{
?>
<div class="loadingpopup" id="loadingpopupbanner" style="display: none;background: rgba(0, 0, 0, 0.47);">
    <div class="loadingcontent" style="background: unset;">
        <img src="assets/banner/<?php echo $result["img_url"]; ?>" style="max-width: 100%; display: inline-block;width: 69%;">
    </div>
</div>
<?php
} ?>



<form method="post" role="form" autocapitalize="off" name="google-sheet" class="php-email-form">
    <input type="submit" id="realbutton" style="display: none;">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Make An Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="firstform">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            <span id="nameerror" style="display: none;color:red;"></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                            <span id="emailerror"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No</label>
                            <input type="text" class="form-control" name="phoneno" id="phoneno"
                                placeholder="Enter PhoneNo">
                            <span id="phoneerror"></span>
                        </div>
                        <div class="form-group">
                            <label for="time">Date</label>
                            <input type="datetime-local" name="Appointmentdate" class="form-control"
                                id="Appointmentdate" placeholder="Enter Appointmentdate">
                            <span id="Appointmentdateerror"></span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btnnextfirst" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                    <div id="secondform" style="display: none;">
                        <div class="form-group">
                            <p style="font-size: 21px;color: orange;">Please Pay 500 Rupes for Book a Appointment </p>
                            <figure style="text-align: center;margin: 0;">
                                <img src="assets/qrcode.png" style="width:60%;text-align: center;">
                            </figure>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btnnextsecond" class="btn btn-primary">Next</button>
                        </div>
                    </div>

                    <div id="thirdform" style="display: none;">
                        <div class="form-group">
                            <label for="tid">Transtion Id</label>
                            <input type="text" class="form-control" id="trantionid" name="transtionid"
                                placeholder="Enter Transtion Id">
                            <span id="tid"></span>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" id="btnnextthird" class="btn btn-primary" value="Book">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal -->

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-12 footer-info">
                        <figure style="width: 100%;display: flex;justify-content: center;"><img style="width: 52%;" src="assets/img/footerlogo.png" alt=""
                                ></figure>
                        <p style="text-align: center;">PUSHPLATA AYURVEDA
                            Hospital & PanchKarma Centre
                            An ISO 9001:2015 Certified Hospital
                        </p>
                    </a>
                    <div class="social-links mt-3 text-center">
                        <a target="_blank" href="https://www.facebook.com/PushplataAyurveda/?ref=pages_you_manage"><i
                                class="bi bi-facebook text-white m-1"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCF7Y0sLoAIbKqab3yDkJoEg"><i
                                class="bi bi-youtube text-white m-1"></i></a>
                        <a target="_blank" href="https://business.google.com/dashboard/l/01030084672622339620 "><i
                                class="bi bi-google text-white m-1"></i></a>
                        <a target="_blank" href="https://www.instagram.com/pushplataayurveda/"><i
                                class="bi bi-instagram text-white m-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="Aboutus.php">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="treatments.php">Treatments</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        Pushplata Ayurveda Near K.L.P college, Shiv Nagar <br>
                        Ghisa Ki Dhani, Rewari, Haryana 123401 <br><br>
                        <strong>Phone:</strong> +01274-251007<br>
                        <strong>Email:</strong> admin@pushplataayurveda.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-6 footer-links">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPushplataAyurveda&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=192845088975500"
                        width="100%" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright"><strong><span>2021 © PUSHPLATA AYURVEDA - Hospital & PanchKarma Centre
        </div>
        <div class="credits">
            Created by <a target="_blank" href="https://digitalsanchar.co.in/">Digital Sanchar</a>
        </div>
    </div>
</footer>

<!-- End Footer -->

<a href="#" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- Vendor JS Files -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script src="assets/vendor/jquery/jquery.min.js"></script> -->
<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/googlesheets.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.lazy.min.js"></script>
<script>
    $(function () {
        $('.lazy').lazy();
    });

    var error = "";

    $("#btnnextfirst").click(function () {
        if ($("#name").val() == "") {
            error = "ss";
            $("#nameerror").text("Please Enter Name").show();
            return false;
        }

        if ($("#email").val() == "") {
            error = "ss";
            $("#emailerror").text("Please Enter Email").show();
            return false;
        }
        else if ($("#email").val().indexOf("@") < 0) {
            error = "ss";
            $("#emailerror").text("Please Enter Valid Email").show();
            return false;
        }

        if ($("#Appointmentdate").val() == "") {
            error = "ss";
            $("#Appointmentdateerror").text("Please Enter Appointment date").show();
            return false;
        }
        var phoneee = $("#phoneno").val();

        if ($("#phoneno").val() == "") {
            error = "ss";
            $("#phoneerror").text("Please Enter Phone No").show();
            return false;
        }

        else if ($.isNumeric($("#phoneno").val()) == false) {
            error = "ss";
            $("#phoneerror").text("Please Enter Valid Phone No").show();
            return false;
        }
        else if (phoneee.length > 15) {
            error = "ss";
            $("#phoneerror").text("Please Enter Valid Phone No").show();
            return false;
        }

        if (error == "") {

            $("#firstform").hide();
            $("#secondform").show();
        }
        else {
            error = "";
        }
        return false;
    });

    $("#btnnextsecond").click(function () {
        $("#secondform").hide();
        $("#thirdform").show();
        return false;
    });

    $("#btnnextthird").click(function () {
        error = "";
        if ($("#trantionid").val() == "") {
            error = "ss";
            $("#tid").text("Please Enter Transtion Id").show();
            return false;
        }
        if (error == "") {
            $("#thirdform").hide();
            $(".close").trigger('click');
            $("#loginpipo").css("display", "flex");
            $("body").css("overflow", "hidden");
            success();
            return false;
        }
    });

    $("#realbutton").click(function () {
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxfTjuHAoxY0PACPxo3X1ijpFRiExJum-jJXRUPNsCGtILqDGp3DFV3c3hkPMVmKXCb/exec';
        const form = document.forms['google-sheet'];
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, {
                method: 'POST', body: new FormData(form)
            }).catch(error =>
                console.error('Error!', error.message))
        });
    });

    function success() {
        var name = $("#name").val();
        var email = $("#email").val();
        var phoneno = $("#phoneno").val();
        var tid = $("#trantionid").val();
        var adate = $("#Appointmentdate").val();

        var formData = new FormData();
        formData.append("name", name);
        formData.append("email", email);
        formData.append("phoneno", phoneno);
        formData.append("tid", tid);
        formData.append("adate", adate);

        $.ajax({
            type: "POST",
            url: "appointmentcheck.php",
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                $("#loginpipo").hide();
                if (data.data == true) {
                    Swal.fire({
                        icon: 'success',
                        html: '<p style="padding: 0;margin: 0;margin-bottom: 14px;font-size: 20px;">Appointment Book Succesfully!</p><p style="padding: 0;margin: 0;margin-bottom: 14px;font-size: 13px;">Website adminstration will contact with in an hour</p>',
                    });
                    $("#realbutton").trigger('click');
                    $("#firstform").show();
                    $("body").css("overflow", "unset");
                    return false;

                } else if (data.data == false && data.error != null && data.error != "") {
                    Swal.fire({
                        icon: 'error',
                        html: 'Please Enter Valid Transtion Id',
                    }).then(function (result) {
                        if (result.value) {
                            $("#firstform").show();
                            $(".btngree").trigger('click');
                        }
                    })
                    return false;
                }
                else {
                    Swal.fire({
                        icon: 'error',
                        html: 'Please Enter Valid Data',
                    }).then(function (result) {
                        if (result.value) {
                            $("#firstform").show();
                            $(".btngree").trigger('click');
                        }
                    })
                    return false;
                }
            }
        });
        return false;
    }
</script>


<script>
    window.setTimeout(function () {
        // First check, if localStorage is supported.
        if (window.localStorage) {
            // Get the expiration date of the previous popup.
            var nextPopup = localStorage.getItem('banner');

            if (nextPopup > new Date()) {
                return;
            }

            // Store the expiration date of the current popup in localStorage.
            var expires = new Date();
            expires = expires.setHours(expires.getHours() + 24);
            localStorage.setItem('banner', expires);
        }
        $("#loadingpopupbanner").show();
    }, 3000);

    $(document).click(function () {
        $("#loadingpopupbanner").hide();
    });
</script>