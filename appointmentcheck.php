<?php
include "admin/include/database.php";
?>
<?php
if ($_POST['name'] !='' && $_POST['email'] !='' && $_POST['phoneno'] !='' && $_POST['tid'] !='') {
    $res = array();

    $name = str_replace("'","",$_POST['name']);
    $email = str_replace("'","",$_POST['email']);
    $phoneno = str_replace("'","",$_POST['phoneno']);
    $tid = str_replace("'","",$_POST['tid']);
    $adate = str_replace("'","",$_POST['adate']);
    $sqlselect = "select * from tbl_appointment where transtionid='$tid'";
    $queryselect = mysqli_query($conn, $sqlselect);
    $rowcount=mysqli_num_rows($queryselect);
if($rowcount==0)
{
            $sql = "INSERT INTO `tbl_appointment`(`email`, `name`, `phoneno`, `transtionid`,`adate`) VALUES ('$email','$name','$phoneno','$tid','$adate')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $res = array("data" => true);
            }
            echo json_encode($res);
            return false;
        }
        else{
            echo json_encode(array("data" => false,"error"=>"Please Enter Valid Transtion Id"));
            return false;
        }
    }

?>