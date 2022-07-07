$("#submitblog").click(function() {

    //blog title 
    var blog_title = $("#blog_title").val();
    if (blog_title == "") {
        Swal.fire(
            'Sorry!',
            'Please Enter Blog Title!',
            'error'
        )
        $("#blog_title").focus();
        return false;
    }

    //  blog Description
    var blog_desc = $("#blog_desc").val();
    if (blog_desc == "") {
        Swal.fire(
            'Sorry!',
            'Please Enter Blog Description!',
            'error'
        )
        $("#blog_desc").focus();
        return false;
    }

    // og_image
    var blog_hideimg = $(".hide").val(); //get the value of hide images

    var hideid = $(".hideid").val(); //get value of hide id

    var blog_img = $("#blog_img").prop("files")[0]; //get the upload image

    blog_imgs = $("#blog_img").val(); //get the value of upload img

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

    formData.append("blog_title", blog_title);

    formData.append("blog_desc", blog_desc);

    formData.append("blog_imgs", blog_imgs); //propertity of img

    formData.append("blog_img", blog_img); //blog img where upload

    formData.append("blog_hideimg", blog_hideimg); //hide images for update

    formData.append("hideid", hideid); //hide id for update

    $.ajax({
        type: "POST",
        url: "blogcheck.php",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            console.log(data);
            var success = JSON.parse(data);
            if (success.data == true) {
                Swal.fire(
                        'Good!',
                        'Data Insert',
                        'success'
                    )
                    .then(function(result) {
                        if (result.value) {
                            window.location = "viewblogs.php";
                        }
                    })

            } else if (success.data == false) {

                Swal.fire(
                        'Good!',
                        'Data Update',
                        'success'
                    )
                    .then(function(result) {
                        if (result.value) {
                            window.location = "viewblogs.php";
                        }
                    })


            }

        }
    });

    return false;
});