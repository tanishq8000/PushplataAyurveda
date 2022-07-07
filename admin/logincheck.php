
<?php
include "include/database.php";

//Login Users Code

if ($_POST['type'] && $_POST['type']=='user') {

$res = array();
$username = str_replace("'","",$_POST['username']);
$Password = str_replace("'","",$_POST['Password']);
// queryss

$sql = "SELECT * FROM `tbl_superadmin` WHERE password='$Password' AND admin='$username';";
$query = mysqli_query($conn, $sql) or die("Query Unsuccessful");
$result = mysqli_fetch_assoc($query);
// print_r($result["id"]);
if ($result) {
    $_SESSION['username'] = $result["id"];
    $res = array("success1" => true);
    echo json_encode($res);
}
}
?>