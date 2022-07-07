<?php
include "include/header.php";
?>

<?php

    $sql = "select * from `tbl_homebanner` where id='1'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);

?>

<!-- End of Sidebar -->

<!-- Content Wrapper -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <h2 class="text-primary  text-center">Add Banner Images</h2>

    <form method="POST">
        <div class="heading" style="font-size: 23px;margin-bottom: 13px;">Upload Images in 1345x185</div>
        <div class="custom-file">
            <input type="file" name="files" class="custom-file-input" id="blog_img"
                value="<?php echo $result['img_url']; ?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
            <?php
if ($result['img_url'] !== '') {
    $img = $result['img_url'];
    echo '<img style="max-height: 168px;display: block;padding: 0 4px;margin-top: 18px;height: 135px;" src="../assets/banner/' . $img . ' "alt=""><br><br>';
}
?>
            <input type="hidden" class="hide" name="files" id="blog_images" value="<?php echo $result['img_url']; ?>">

            <input type="hidden" class="hideid" name="" value="<?php echo $result['id']; ?>">
        </div>
        <div class="form-group mt-4">
            <?php

if($result['is_active']==true)
{
    echo "<input type='checkbox'  id='isactive' value='1' name='isactive' checked='true'>";
}
else{
    echo "<input type='checkbox'  id='isactive' value='0' name='isactive'>";
}
?>            <label>Is Active</label>
        </div>
        <button style="margin-top: 38px;padding: 11px 25px 8px 25px;" type="submit" id="submitblog"
            class="btn btn-primary">Save</button>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<?php include "include/footer.php";?>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<script src="js/banner.js"></script>

</body>

</html>