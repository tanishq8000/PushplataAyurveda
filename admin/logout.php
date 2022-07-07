<?php

include "include/database.php";

if (isset($_SESSION['username'])) {

    unset($_SESSION['username']);

    header("location:loginuser.php");

    
}
else
{
    unset($_SESSION['admin']);

    header("location:login.php");


}





?>