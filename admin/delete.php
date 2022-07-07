<?php
// Pages Delete Query
include "include/database.php";
// check session

    if (isset($_SESSION['username'])) {

        if ($_GET['mode'] && $_GET['mode'] == 'pages') {

            $id = $_GET['id'];

            echo $id;

            $sql = "DELETE FROM `tbl_pages` WHERE id=$id";

            $query = mysqli_query($conn, $sql);

            if ($query) {
                header("location:viewpages.php");
            }
        }

//Delete Review//

        if ($_GET['mode'] && $_GET['mode'] == 'homepage') {

            $id = $_GET['id'];
            $sql = "DELETE FROM `tbl_homepageslider` WHERE id=$id";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("location:homepage.php");
            }
        }

        // Delete Blogs
        
        if ($_GET['mode'] && $_GET['mode'] == 'blogs') {

            $id = $_GET['id'];
            $sql = "DELETE FROM `tbl_blogs` WHERE id=$id";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("location:viewblogs.php");
            }
        }
    }

if (isset($_SESSION['username'])) {


        // delete pages

        if ($_GET['mode'] && $_GET['mode'] == 'pages') {

            $id = $_GET['id'];

            echo $id;

            $sql = "DELETE FROM `tbl_pages` WHERE id=$id";

            $query = mysqli_query($conn, $sql);

            if ($query) {

                header("location:viewpages.php");

            }

        }

//Delete Review//

        if ($_GET['mode'] && $_GET['mode'] == 'review') {

            $id = $_GET['id'];

            $sql = "DELETE FROM `tbl_reviews` WHERE id=$id";

            $query = mysqli_query($conn, $sql);

            if ($query) {

                header("location:viewreviews.php");

            }

        }

//Delete Settings

        if ($_GET['mode'] && $_GET['mode'] == 'settings') {

            $id = $_GET['id'];

            $sql = "DELETE FROM `tbl_settings` WHERE id=$id";

            $query = mysqli_query($conn, $sql);

            if ($query) {

                header("location:viewsettings.php");

            }

        }

//Delete Users

        if ($_GET['mode'] && $_GET['mode'] == 'users') {

            $id = $_GET['id'];

            $sql = "DELETE FROM `tbl_users` WHERE id=$id";

            $query = mysqli_query($conn, $sql);

            if ($query) {

                header("location:viewuser.php");

            }

        }

// Delete Blogs

        if ($_GET['mode'] && $_GET['mode'] == 'blogs') {

            $id = $_GET['id'];

            $sql = "DELETE FROM `tbl_blogs` WHERE id=$id";

            $query = mysqli_query($conn, $sql);

            if ($query) {

                header("location:viewblogs.php");

            }

        }
  
} else {

}
