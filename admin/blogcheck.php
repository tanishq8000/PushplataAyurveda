<?php

include "include/database.php";

$vaild_extensions = array("jpg", "png", "jpeg");

$blog_title = $_POST['blog_title'];

$blog = array();

$created_at = date('Y-m-d H:i:s');

$blog_desc = $_POST['blog_desc'];

$hideid = $_POST['hideid'];

// $blog_images = $_POST['blog_images']; //hide images for update

if ($hideid != '') {

    // check img blank or not
    $img = $_POST['blog_imgs'];

    if ($img != '') {

        $filename = rand() . "_" . $_FILES['blog_img']['name'];

        $location = "upload/blog/" . $filename;

        $imageFileType = pathinfo($location, PATHINFO_EXTENSION);

        $imageFileType = strtolower($imageFileType);

        if (in_array(strtolower($imageFileType), $vaild_extensions)) {

            /* Upload file */

            if (move_uploaded_file($_FILES['blog_img']['tmp_name'], $location)) {

                $response = $location;

            }
        }
        $sql = "UPDATE `tbl_blogs` SET `created_at`='$created_at',`blog_title`='$blog_title',`blog_desc`='$blog_desc',`blog_img`='$filename' WHERE id=$hideid";

        $query = mysqli_query($conn, $sql);

        if ($query) {

            $blog = array("data" => false);

        }

        echo json_encode($blog);

        return false;
    } else {

        $filename = $_POST['blog_hideimg'];

        $sql ="UPDATE `tbl_blogs` SET `created_at`='$created_at',`blog_title`='$blog_title',`blog_desc`='$blog_desc',`blog_img`='$filename'  WHERE  id=$hideid";

        // print_r($sql);

        $query = mysqli_query($conn, $sql);

        if ($query) {

            $blog = array("data" => false);

        }

        echo json_encode($blog);
        return false;

    }

} else {

    $filename = rand() . "_" . $_FILES['blog_img']['name'];

    $location = "upload/blog/" . $filename;

    $imageFileType = pathinfo($location, PATHINFO_EXTENSION);

    $imageFileType = strtolower($imageFileType);

    if (in_array(strtolower($imageFileType), $vaild_extensions)) {

        /* Upload file */

        if (move_uploaded_file($_FILES['blog_img']['tmp_name'], $location)) {

            $response = $location;

        }
    }

    $sql = "INSERT INTO `tbl_blogs`( `blog_title`,`created_at`, `blog_desc`,`blog_img`) VALUES ('$blog_title','$created_at','$blog_desc','$filename')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $blog = array("data" => true);
    }
    echo json_encode($blog);
}
