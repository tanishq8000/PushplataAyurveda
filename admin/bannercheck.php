<?php

include "include/database.php";

$vaild_extensions = array("jpg", "png", "jpeg");

$hideid = $_POST['hideid'];

// $blog_images = $_POST['blog_images']; //hide images for update

if ($hideid != '') {

    // check img blank or not
    
    $img = $_POST['blog_imgs'];

    $isactive = $_POST['isactive'];
    
    

    if ($img != '') {

        $filename = rand() . "_" . $_FILES['blog_img']['name'];

        $location = "../assets/banner/" . $filename;

        $imageFileType = pathinfo($location, PATHINFO_EXTENSION);

        $imageFileType = strtolower($imageFileType);

        if (in_array(strtolower($imageFileType), $vaild_extensions)) {

            /* Upload file */

            if (move_uploaded_file($_FILES['blog_img']['tmp_name'], $location)) {
                $response = $location;
            }
        }
        $sql = "UPDATE `tbl_homebanner` SET `img_url`='$filename',`is_active`=$isactive WHERE id='1'";
     
        $query = mysqli_query($conn, $sql);
        $blog="";
        if ($query) {
            $blog = array("data" => false);
        }
        echo json_encode($blog);
        return false;
    } else {

        $filename = $_POST['blog_hideimg'];
        $sql ="UPDATE `tbl_homebanner` SET `img_url`='$filename',`is_active`=$isactive  WHERE  id='1'";
        
        $query = mysqli_query($conn, $sql);
        $blog="";
        if ($query) {
            $blog = array("data" => false);
        }
        echo json_encode($blog);
        return false;
    }
}
