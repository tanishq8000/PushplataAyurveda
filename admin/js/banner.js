$("#submitblog").click(function () {
    // og_image
    var blog_hideimg = $(".hide").val(); //get the value of hide images
    var hideid = $(".hideid").val(); //get value of hide i
    var blog_img = $("#blog_img").prop("files")[0]; //get the upload image
    blog_imgs = $("#blog_img").val(); //get the value of upload img
    var isactive = $("#isactive").val();
    if($("#isactive").prop('checked') == true){
        isactive=true;
        }
    if (blog_imgs == '') {

        if (blog_hideimg == '') {
            Swal.fire(
                'Sorry',
                'Please Upload Image!',
                'error'
            )
            $("#blog_img").focus();
            return false;

        }
    }
    var formData = new FormData();

    formData.append("blog_imgs", blog_imgs); //propertity of img
    formData.append("blog_img", blog_img); //blog img where upload
    formData.append("blog_hideimg", blog_hideimg); //hide images for update
    formData.append("hideid", hideid); //hide id for update
    formData.append("isactive", isactive); //hide id for update

    $.ajax({
        type: "POST",
        url: "bannercheck.php",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            console.log(data);
            var success = JSON.parse(data);
            if (success.data == true) {
                Swal.fire(
                    'Good!',
                    'Data Insert',
                    'success'
                )
                    .then(function (result) {
                        if (result.value) {
                            window.location = "addbanner.php";
                        }
                    })

            } else if (success.data == false) {

                Swal.fire(
                    'Good!',
                    'Data Update',
                    'success'
                )
                    .then(function (result) {
                        if (result.value) {
                            window.location = "addbanner.php";
                        }
                    })
            }
        }
    });
    return false;
});